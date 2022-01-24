<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Console;
use App\Entity\Game;
use App\Entity\Note;
use App\Entity\Test;
use App\Repository\TestRepository;
use App\Repository\ConsoleRepository;
use App\Repository\CategoryRepository;
use App\Repository\GameRepository;
use App\Repository\NoteRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Filters;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Filter\EntityFilter;


class DashboardController extends AbstractDashboardController
{
    protected $testRepository;
    protected $categoryRepository;
    protected $consoleRepository;
    protected $gameRepository;
    protected $noteRepository;

    public function __construct(
        TestRepository $testRepository,
        CategoryRepository $categoryRepository,
        ConsoleRepository $consoleRepository,
        GameRepository $gameRepository,
        NoteRepository $noteRepository
    )
    {
        $this->testRepository = $testRepository;
        $this->categoryRepository = $categoryRepository;
        $this->consoleRepository = $consoleRepository;
        $this->gameRepository = $gameRepository;
        $this->noteRepository = $noteRepository;
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $games = $this->gameRepository->findAll();
        $categories = $this->categoryRepository->findAll();
        $consoles = $this->consoleRepository->findAll();
        return $this->render('bundles/easyAdminBundle/welcome.html.twig', 
    [
        'countAllGame' => $this->gameRepository->countAllGame(),
        'countAllConsole' => $this->consoleRepository->countAllConsole(),
        'countAllCategory' => $this->categoryRepository->countAllCategory(),
        'countAllTest' => $this->testRepository->countAllTest(),
        'games' => $games,
        'categories' => $categories,
        'consoles' => $consoles,
    ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gemuchi');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Tableau de bord', 'fa fa-home');

        yield MenuItem::section('Tests', 'fas fa-scroll');
        yield MenuItem::linkToCrud('Tous les test', 'fas fa-list', Test::class);
        yield MenuItem::linkToCrud('Ajouter un test', 'fas fa-plus', Test::class)->setAction('new');

        yield MenuItem::section('Notes', 'fas fa-award');
        yield MenuItem::linkToCrud('Toutes les notes', 'fas fa-list', Note::class);
        yield MenuItem::linkToCrud('Ajouter une note', 'fas fa-plus', Note::class)->setAction('new');
        
        yield MenuItem::section('Catégories', 'fab fa-buffer');
        yield MenuItem::linkToCrud('Toutes les catégories', 'fas fa-list', Category::class);
        yield MenuItem::linkToCrud('Ajouter une catégorie', 'fas fa-plus', Category::class)->setAction('new');
        
        yield MenuItem::section('Consoles', 'fab fa-playstation');
        yield MenuItem::linkToCrud('Toutes les consoles', 'fas fa-list', Console::class);
        yield MenuItem::linkToCrud('Ajouter une console', 'fas fa-plus', Console::class)->setAction('new');
        
        yield MenuItem::section('Jeux', 'fas fa-gamepad');
        yield MenuItem::linkToCrud('Tous les jeux', 'fas fa-list', Game::class);
        yield MenuItem::linkToCrud('Ajouter un jeu', 'fas fa-plus', Game::class)->setAction('new');

       // yield MenuItem::linkToCrud('Administrateur', 'fas fa-user', User::class);
        
    }

 }



