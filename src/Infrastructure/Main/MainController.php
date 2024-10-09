<?php
namespace App\Infrastructure\Main;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig as Twig;

class MainController {
    private Twig $twig;

    const PAGE_TITLE = 'TASIVA | Sistemas de visión artificial';

    public function __construct(Twig $twig) {
        $this->twig = $twig;
    }

    public function getMainPage(Request $request, Response $response): Response {
        return $this->twig->render($response, '/Main/main.twig', [
            'requested_path' => $request->getUri()->getPath(),
            'view_title' => self::PAGE_TITLE
        ]);
    }
}