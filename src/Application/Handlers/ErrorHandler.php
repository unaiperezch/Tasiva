<?php
namespace App\Application\Handlers;

use Slim\Interfaces\ErrorRendererInterface;
use Slim\Views\Twig;
use Throwable;

class ErrorHandler implements ErrorRendererInterface
{
    protected $view;

    public function __construct(Twig $view) {
        $this->view = $view;
    }
    
    public function __invoke(Throwable $exception, bool $displayErrorDetails): string
    {
        return $this->view->fetch('./Error/error.twig');
    }
}