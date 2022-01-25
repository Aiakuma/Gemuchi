<?php

namespace App\Controller\Admin;

use App\Entity\Note;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;

class NoteCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Note::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id', 'Index')->hideOnIndex()->hideOnForm()->hideOnDetail(),
            AssociationField::new('game'),
            NumberField::new('musique', 'Musique'),
            NumberField::new('absencebug', 'Absence de bug'),
            NumberField::new('tempschargement', 'Temps de chargement'),
            NumberField::new('bruitage', 'Bruitage'),
            NumberField::new('originalite', 'Originalité'),
            NumberField::new('synergie', 'Synergie'),
            NumberField::new('rendementhoraire', 'Rendement horaire'),
            NumberField::new('phasejeu', 'Phase de Jeu'),
            NumberField::new('chargeemotionnelle', 'Charge Emotionnelle'),
            NumberField::new('narration', 'Narration'),
            NumberField::new('pertinencepartipris', 'Pertinence du parti pris'),
            NumberField::new('diversitenuance', 'Diversité et nuance'),
            NumberField::new('gestiondifficulte', 'Gestion de la difficulté'),
            NumberField::new('efficaciteinterface', 'Efficacité de l\'interface'),
            NumberField::new('ressourcemateriel', 'Ressource Matériel'),
            NumberField::new('disponibilite', 'Disponibilité'),
            NumberField::new('messageautocritique', 'Message autocritique'),
            NumberField::new('integrationmessage', 'Intégration du message'),
            NumberField::new('coupdecoeur', 'Coup de coeur'),
        ];
    }

}
