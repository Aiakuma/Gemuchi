<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\GameRepository;
use App\Repository\CategoryRepository;
use App\Repository\ConsoleRepository;
use App\Repository\TestRepository;
use App\Entity\Test;

 /**
     * @Route("/tests")
     */
class TestController extends AbstractController
{
     /**
     * @Route("/", name="index_tests")
     */
    public function index(GameRepository $GameRepository, CategoryRepository $categoryRepository,ConsoleRepository $consoleRepository): Response
    {
        $games = $GameRepository->findBy([], ['id' => 'DESC']);
        $category = $categoryRepository->findAll();
        $consoles = $consoleRepository->findAll();

        return $this->render('test/index.html.twig',
            [
                'games' => $games,
                'categories' => $category,
                'consoles' => $consoles,
            ]);
    }

    /**
     * @Route("/{id}", name="view_test")
     */
    public function view(GameRepository $GameRepository,TestRepository $testRepository,$id, CategoryRepository $categoryRepository): Response
    {
        $test = $testRepository->find($id);
        $game = $GameRepository->find($test);
        $games = $GameRepository->findAll();

        
        return $this->render('test/view.html.twig',
            [
                'test' => $test,
                'game' => $game,
                'games' => $games,

            ]);
    }
}
