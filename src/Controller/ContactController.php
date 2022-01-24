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

            return $this->redirectToRoute('contact');
            }
            return $this->render('contact/index.html.twig',
            [
                'form' => $form->createView(),
            ]);
    }
}

