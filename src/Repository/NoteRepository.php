<?php

namespace App\Repository;

use App\Entity\Note;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Note|null find($id, $lockMode = null, $lockVersion = null)
 * @method Note|null findOneBy(array $criteria, array $orderBy = null)
 * @method Note[]    findAll()
 * @method Note[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class NoteRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Note::class);
    }

    public function totalNote() 
    {
        return $this->createQueryBuilder('n')
            ->select("SUM(n.id)")
            //->select("SUM(n.musique + n.absencebug + n.tempschargement + n.bruitage + n.originalite + n.rendementhoraire + n.phasejeu + n.chargeemotionnelle + n.narration + n.pertinencepartipris + n.diversitenuance + n.gestiondifficulte + n.efficaciteinterface + n.disponibilite + n.messageautocritique + n.integrationmessage + n.synergie + n.ressourcemateriel)")
            ->getQuery()
            ->getSingleScalarResult();
    }
}
