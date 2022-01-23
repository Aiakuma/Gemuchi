<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;
use App\Repository\CategoryRepository;
use App\Repository\ConsoleRepository;
/**
     * @Route("/")
     */
class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(GameRepository $GameRepository, CategoryRepository $categoryRepository,ConsoleRepository $consoleRepository): Response
    {
        $games = $GameRepository->findBy([], ['id' => 'DESC'], 4);
        $category = $categoryRepository->findAll();
        $consoles = $consoleRepository->findAll();

        return $this->render('home/index.html.twig',
            [
                'games' => $games,
                'categories' => $category,
                'consoles' => $consoles,
            ]);
    }
}
