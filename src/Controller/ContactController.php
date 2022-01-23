<?php

namespace App\Controller;


use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;

/**
     * @Route("/contact")
     */

class ContactController extends AbstractController
{
    /**
     * @Route("/", name="contact")
     */
    public function index(MailerInterface $mailer, Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid() ){
            /**$contactFormData = $form->getData();

            $message = (new Email())
            ->from($contactFormData['email'])
            ->to('ton@gmail.com')
            ->subject('vous avez reçu unn email')
            ->text('Sender : '.$contactFormData['email'].\PHP_EOL.
                $contactFormData['Message'],
                'text/plain');
            $mailer->send($message);
            $this->addFlash('success', 'Votre message a été envoyé.');**/

            /* En cas d'échec de DevMail
            $contact = $form->getData();
            $this->entityManager->persist($contact);
            $this->entityManager->flush();
            $this->addFlash('success', 'Votre message a été envoyé.');
            */
            return $this->redirectToRoute('contact');
            }
            return $this->render('contact/index.html.twig',
            [
                'form' => $form->createView(),
            ]);
    }
}

