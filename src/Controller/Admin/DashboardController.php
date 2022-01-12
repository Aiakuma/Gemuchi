<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Console;
use App\Entity\Game;
use App\Entity\Note;
use App\Entity\Test;
use App\Entity\User;
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
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Gemuchi');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Category', 'fas fa-user', Category::class);
        yield MenuItem::linkToCrud('Console', 'fas fa-user', Console::class);
        yield MenuItem::linkToCrud('Game', 'fas fa-user', Game::class);
        yield MenuItem::linkToCrud('Note', 'fas fa-user', Note::class);
        yield MenuItem::linkToCrud('Test', 'fas fa-user', Test::class);
        yield MenuItem::linkToCrud('User', 'fas fa-user', User::class);
    }
}
