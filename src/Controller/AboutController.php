<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
/**
     * @Route("/a-propos")
     */
class AboutController extends AbstractController
{
    /**
     * @Route("/", name="about")
     */
    public function index(): Response
    {
        return $this->render('about/index.html.twig');
    }
}
