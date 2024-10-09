<?php

namespace App\Infrastructure\Contact;

use App\Application\Email\EmailProviderService;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\Twig as Twig;

class ContactController
{
    private Twig $twig;
    private EmailProviderService $emailProvider;

    const PAGE_TITLE = 'CONTACTO | TASIVA';

    public function __construct(Twig $twig, EmailProviderService $emailProvider)
    {
        $this->twig = $twig;
        $this->emailProvider = $emailProvider;
    }

    public function getForm(Request $request, Response $response): Response
    {
        return $this->twig->render($response, '/Contact/contact.twig', [
            'requested_path' => $request->getUri()->getPath(),
            'view_title' => self::PAGE_TITLE
        ]);
    }

    public function sendContactEmail(Request $request, Response $response): Response
    {
        $data = $request->getParsedBody();

        $companyName = $data['companyInput'];
        $senderName = $data['nameInput'];
        $senderMail = $data['emailInput'];
        $senderTelf = $data['telfInput'];
        $consult = $data['consultInput'];

        $email = $this->emailProvider->createEmail(
            $senderMail,
            "Contacto: Tasiva",
            $consult,
            $senderTelf,
            $senderName,
            $companyName
        );

        $this->emailProvider->sendEmail($email);

        return $this->twig->render($response, '/Contact/contact.twig', [
            'requested_path' => $request->getUri()->getPath(),
            'view_title' => self::PAGE_TITLE,
            'is_email_sent' => true
        ]);
    }
}
