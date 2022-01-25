<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Repository\GameRepository;
use App\Entity\Game;

class SearchController extends AbstractController
{
    /**
     * @Route("/search", name="search")
     */
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $repository = $doctrine->getRepository(Game::class);
        if (isset($_GET["btn"]) AND $_GET["btn"] == "rechercher")
    {
        $_GET['terme'] = htmlspecialchars($_GET["terme"]);
        $request = $_GET["terme"];
        $request = trim($terme);
        $request = strip_tags($terme);
        $results = $repository->findBy(['name' => $request]);
    }
    return $this->render('search/index.html.twig', [
        'games' => $results
    ]);
    }
    
}