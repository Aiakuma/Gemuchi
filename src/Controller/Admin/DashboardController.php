<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Console;
use App\Entity\Game;
use App\Entity\Note;
use App\Entity\Test;
use App\Entity\User;
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
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('bundles/easyAdminBundle/welcome.html.twig');
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



