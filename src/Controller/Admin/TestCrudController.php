<?php

namespace App\Controller\Admin;

use App\Entity\Test;
use App\Repository\NoteRepository;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateTimeField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class TestCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Test::class;
    }

    protected $noteRepository;

    public function __construct(
        NoteRepository $noteRepository
    )
    {
        $this->noteRepository = $noteRepository;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Index')->hideOnIndex()->hideOnForm()->hideOnDetail(),
            AssociationField::new('game', 'Jeu'),
            TextEditorField::new('son', 'Son'),
            TextEditorField::new('code', 'Code'),
            TextEditorField::new('gameplay', 'Gameplay'),
            TextEditorField::new('rythme', 'Rythme'),
            TextEditorField::new('scenario', 'Scénario'),
            TextEditorField::new('graphisme', 'Graphisme'),
            TextEditorField::new('accessibilite', 'Accessibilité'),
            TextEditorField::new('disponibilite', 'Disponibilité'),
            TextEditorField::new('ouverturereflexion', 'Ouverture et réflexion'),
        ];
    }

}
