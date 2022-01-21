<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;
use App\Repository\CategoryRepository;
use App\Repository\ConsoleRepository;

class TestController extends AbstractController
{
    /**
     * @Route("/test", name="test")s
     */
    public function index(): Response
    {
        return $this->render('test/index.html.twig');
    }
}
