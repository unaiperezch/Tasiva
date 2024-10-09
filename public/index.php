<?php

declare(strict_types=1);

use App\Application\Email\EmailProviderService;
use App\Application\Email\EmailIdService;
use App\Application\Handlers\ErrorHandler as CustomErrorHandler;
use App\Application\ResponseEmitter\ResponseEmitter;
use App\Application\Settings\SettingsInterface;
use App\Infrastructure\Contact\ContactController;
use App\Infrastructure\Main\MainController;
use DI\ContainerBuilder;
use Slim\Factory\AppFactory;
use Slim\Factory\ServerRequestCreatorFactory;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require __DIR__ . '/../vendor/autoload.php';

// Instantiate PHP-DI ContainerBuilder
$containerBuilder = new ContainerBuilder();

/*if (false) { // Should be set to true in production
	$containerBuilder->enableCompilation(__DIR__ . '/../var/cache');
}*/

// Set up settings
$settings = require __DIR__ . '/../app/settings.php';
$settings($containerBuilder);

// Set up dependencies
$dependencies = require __DIR__ . '/../app/dependencies.php';
$dependencies($containerBuilder);


// Build PHP-DI Container instance
$container = $containerBuilder->build();

// Instantiate the app
AppFactory::setContainer($container);
$app = AppFactory::create();
$callableResolver = $app->getCallableResolver();

// Create Twig
$twig = Twig::create(__DIR__ . '/templates', ['cache' => false]);
$emailIdService = new EmailIdService();
$emailProvider = new EmailProviderService($twig, $emailIdService);

// Add Twig-View Middleware
$app->add(TwigMiddleware::create($app, $twig));

$container->set(MainController::class, function() use($twig):MainController{
	return new MainController($twig);
});

$container->set(ContactController::class, function() use($twig, $emailProvider):ContactController{
	return new ContactController($twig, $emailProvider);
});

$container->set(CustomErrorHandler::class, function() use($twig):CustomErrorHandler{
	return new CustomErrorHandler($twig);
});

// Register routes
$routes = require __DIR__ . '/../app/routes.php';
$routes($app);

/** @var SettingsInterface $settings */
$settings = $container->get(SettingsInterface::class);

$displayErrorDetails = $settings->get('displayErrorDetails');
$logError = $settings->get('logError');
$logErrorDetails = $settings->get('logErrorDetails');

// Create Request object from globals
$serverRequestCreator = ServerRequestCreatorFactory::create();
$request = $serverRequestCreator->createServerRequestFromGlobals();

// Add Routing Middleware
$app->addRoutingMiddleware();

// Add Body Parsing Middleware
$app->addBodyParsingMiddleware();

// Add Error Middleware
$errorMiddleware = $app->addErrorMiddleware($displayErrorDetails, $logError, $logErrorDetails);
$errorHandler = $errorMiddleware->getDefaultErrorHandler();
$errorHandler->registerErrorRenderer('text/html', CustomErrorHandler::class);

// Run App & Emit Response
$response = $app->handle($request);
$responseEmitter = new ResponseEmitter();
$responseEmitter->emit($response);
