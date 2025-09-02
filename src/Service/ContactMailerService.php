<?php

namespace App\Service;

use App\DTO\ContactDTO;
use Psr\Log\LoggerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;

class ContactMailerService  // Assure-toi que le nom de la classe correspond au nom du fichier
{
    public function __construct(
        private MailerInterface $mailer,
        private LoggerInterface $logger,
        private string $contactEmail  // Ce paramètre sera injecté via services.yaml
    ) {}

    public function sendContactEmail(ContactDTO $contact): bool
    {
        try {
            $email = (new TemplatedEmail())
                ->from(new Address($this->contactEmail, 'Portfolio Contact Form'))
                ->replyTo(new Address($contact->email, $contact->fullName))
                ->to($this->contactEmail)
                ->subject(sprintf('[Portfolio] Contact de %s - %s', $contact->fullName, $contact->company))
                ->text($contact->message)
                ->context([
                    'contact' => $contact,
                    'date' => new \DateTime()
                ]);

            $this->mailer->send($email);

            $this->logger->info('Contact email sent', [
                'from' => $contact->email,
                'name' => $contact->fullName,
                'company' => $contact->company
            ]);

            return true;
        } catch (TransportExceptionInterface $e) {
            $this->logger->error('Failed to send contact email', [
                'error' => $e->getMessage(),
                'from' => $contact->email,
                'company' => $contact->company
            ]);

            return false;
        }
    }
}
