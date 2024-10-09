<?php

namespace App\Application\Email;

use App\Application\Email\EmailIdService;
use Exception;
use Slim\Views\Twig;
use Symfony\Component\Mailer\Mailer;
use Symfony\Component\Mailer\Transport;
use Symfony\Component\Mime\Email;

class EmailProviderService
{
    private String $emailUrl;
    private $mailer;
    private $view;
    private EmailIdService $emailIdService;

    const TASIVA_URL_EMAIL = "unaiperez193@gmail.com";

    public function __construct(Twig $view, EmailIdService $emailIdService)
    {
        $this->view = $view;
        $this->emailIdService = $emailIdService;

        $smtpData = parse_ini_file(__DIR__ . "/../../../symfony_email_config.ini");

        //Para Gmail -> smtp://tu_correo@gmail.com:tu_contraseña@smtp.gmail.com:587
        $this->emailUrl = $smtpData['mailer_transport'] . "://" . $smtpData['mailer_user'] . ":" . $smtpData['mailer_password'] . "@" . $smtpData['mailer_host'] . ":" . $smtpData['mailer_port'];

        $transport = Transport::fromDsn($this->emailUrl);

        $this->mailer = new Mailer($transport);
    }

    public function createEmail(String $email, String $subject, String $body, String $telf, String $senderName, String $companyName)
    {
        $htmlContent = $this->view->fetch('/Email/contact_email.twig', [
            'consult' => $body,
            'telf' => $telf,
            'sender_name' => $senderName,
            'company_name' => $companyName,
            'id' => $this->emailIdService->getEmailId()
        ]);

        return (new Email())->from($email)
            ->to(self::TASIVA_URL_EMAIL)
            ->subject($subject)
            ->html($htmlContent);
    }

    public function sendEmail(Email $email)
    {
        try {
            $this->mailer->send($email);
            echo "Correo enviado con éxito.";
        } catch (Exception $e) {
            echo "No se pudo enviar el correo. Error: " . $e->getMessage();
        }
    }
}
