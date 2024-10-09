<?php

declare(strict_types=1);

use App\Infrastructure\Contact\ContactController;
use App\Infrastructure\Main\MainController;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', [MainController::class, 'getMainPage'])->setName('main-get'); 

    $app->get('/contacto', [ContactController::class, 'getForm'])->setName('contact-get'); 
    $app->post('/contacto', [ContactController::class, 'sendContactEmail'])->setName('contact-post'); 
    
    // $app->group('/users', function (Group $group) {
    //     $group->get('', ListUsersAction::class);
    //     $group->get('/{id}', ViewUserAction::class);
    // });
};
