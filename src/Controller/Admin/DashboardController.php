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
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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
        yield MenuItem::linkToCrud('Administrateur', 'fas fa-user', User::class);
        yield MenuItem::linkToCrud('Catégories', 'fas fa-', Category::class);
        yield MenuItem::linkToCrud('Consoles', 'fas fa-', Console::class);
        yield MenuItem::linkToCrud('Jeux', 'fas fa-star', Game::class);
        yield MenuItem::linkToCrud('Noes', 'fas fa-', Note::class);
        yield MenuItem::linkToCrud('Tests', 'fas fa-', Test::class);
        
    }


}
