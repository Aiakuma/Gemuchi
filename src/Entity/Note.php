<?php

namespace App\Entity;

use App\Repository\NoteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NoteRepository::class)
 */
class Note
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="float")
     */
    private $musique;

    /**
     * @ORM\Column(type="float")
     */
    private $absencebug;

    /**
     * @ORM\Column(type="float")
     */
    private $tempschargement;

    /**
     * @ORM\Column(type="float")
     */
    private $bruitage;

    /**
     * @ORM\Column(type="float")
     */
    private $originalite;

    /**
     * @ORM\Column(type="float")
     */
    private $rendementhoraire;

    /**
     * @ORM\Column(type="float")
     */
    private $phasejeu;

    /**
     * @ORM\Column(type="float")
     */
    private $chargeemotionnelle;

    /**
     * @ORM\Column(type="float")
     */
    private $narration;

    /**
     * @ORM\Column(type="float")
     */
    private $pertinencepartipris;

    /**
     * @ORM\Column(type="float")
     */
    private $diversitenuance;

    /**
     * @ORM\Column(type="float")
     */
    private $gestiondifficulte;

    /**
     * @ORM\Column(type="float")
     */
    private $efficaciteinterface;

    /**
     * @ORM\Column(type="float")
     */
    private $disponibilite;

    /**
     * @ORM\Column(type="float")
     */
    private $messageautocritique;

    /**
     * @ORM\Column(type="float")
     */
    private $integrationmessage;

    /**
     * @ORM\Column(type="float")
     */
    private $coupdecoeur;

    /**
     * @ORM\OneToOne(targetEntity=Game::class, mappedBy="Note", cascade={"persist", "remove"})
     */
    private $game;

    /**
     * @ORM\Column(type="float")
     */
    private $synergie;

    /**
     * @ORM\Column(type="float")
     */
    private $ressourcemateriel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMusique(): ?float
    {
        return $this->musique;
    }

    public function setMusique(float $musique): self
    {
        $this->musique = $musique;

        return $this;
    }

    public function getAbsenceBug(): ?float
    {
        return $this->absencebug;
    }

    public function setAbsenceBug(float $absencebug): self
    {
        $this->absencebug = $absencebug;

        return $this;
    }

    public function getTempsChargement(): ?float
    {
        return $this->tempschargement;
    }

    public function setTempsChargement(float $tempschargement): self
    {
        $this->tempschargement = $tempschargement;

        return $this;
    }

    public function getBruitage(): ?float
    {
        return $this->bruitage;
    }

    public function setBruitage(float $bruitage): self
    {
        $this->bruitage = $bruitage;

        return $this;
    }

    public function getOriginalite(): ?float
    {
        return $this->originalite;
    }

    public function setOriginalite(float $originalite): self
    {
        $this->originalite = $originalite;

        return $this;
    }

    public function getRendementHoraire(): ?float
    {
        return $this->rendementhoraire;
    }

    public function setRendementHoraire(float $rendementhoraire): self
    {
        $this->rendementhoraire = $rendementhoraire;

        return $this;
    }

    public function getPhaseJeu(): ?float
    {
        return $this->phasejeu;
    }

    public function setPhaseJeu(float $phasejeu): self
    {
        $this->phasejeu = $phasejeu;

        return $this;
    }

    public function getChargeEmotionnelle(): ?float
    {
        return $this->chargeemotionnelle;
    }

    public function setChargeEmotionnelle(float $chargeemotionnelle): self
    {
        $this->chargeemotionnelle = $chargeemotionnelle;

        return $this;
    }

    public function getNarration(): ?float
    {
        return $this->narration;
    }

    public function setNarration(float $narration): self
    {
        $this->narration = $narration;

        return $this;
    }

    public function getPertinencePartiPris(): ?float
    {
        return $this->pertinencepartipris;
    }

    public function setPertinencePartiPris(float $pertinencepartipris): self
    {
        $this->pertinencepartipris = $pertinencepartipris;

        return $this;
    }

    public function getDiversiteNuance(): ?float
    {
        return $this->diversitenuance;
    }

    public function setDiversiteNuance(float $diversitenuance): self
    {
        $this->diversitenuance = $diversitenuance;

        return $this;
    }

    public function getGestionDifficulte(): ?float
    {
        return $this->gestiondifficulte;
    }

    public function setGestionDifficulte(float $gestiondifficulte): self
    {
        $this->gestiondifficulte = $gestiondifficulte;

        return $this;
    }

    public function getEfficaciteInterface(): ?float
    {
        return $this->efficaciteinterface;
    }

    public function setEfficaciteInterface(float $efficaciteinterface): self
    {
        $this->efficaciteinterface = $efficaciteinterface;

        return $this;
    }

    public function getDisponibilite(): ?float
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(float $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getMessageAutocritique(): ?float
    {
        return $this->messageautocritique;
    }

    public function setMessageAutocritique(float $messageautocritique): self
    {
        $this->messageautocritique = $messageautocritique;

        return $this;
    }

    public function getIntegrationMessage(): ?float
    {
        return $this->integrationmessage;
    }

    public function setIntegrationMessage(float $integrationmessage): self
    {
        $this->integrationmessage = $integrationmessage;

        return $this;
    }

    public function getCoupDeCoeur(): ?float
    {
        return $this->coupdecoeur;
    }

    public function setCoupDeCoeur(float $coupdecoeur): self
    {
        $this->coupdecoeur = $coupdecoeur;

        return $this;
    }

    public function getGame(): ?Game
    {
        return $this->game;
    }

    public function setGame(?Game $game): self
    {
        // unset the owning side of the relation if necessary
        if ($game === null && $this->game !== null) {
            $this->game->setNote(null);
        }

        // set the owning side of the relation if necessary
        if ($game !== null && $game->getNote() !== $this) {
            $game->setNote($this);
        }

        $this->game = $game;

        return $this;
    }

    public function getSynergie(): ?float
    {
        return $this->synergie;
    }

    public function setSynergie(float $synergie): self
    {
        $this->synergie = $synergie;

        return $this;
    }

    public function getRessourceMateriel(): ?float
    {
        return $this->ressourcemateriel;
    }

    public function setRessourceMateriel(float $ressourcemateriel): self
    {
        $this->ressourcemateriel = $ressourcemateriel;

        return $this;
    }

    public function __toString()
    {
        return $this->musique. ' '. $this->absencebug. ' '. $this->tempschargement. ' '. $this->bruitage. ' '. $this->originalite. ' '. $this->rendementhoraire. ' '. $this->phasejeu. ' '. $this->chargeemotionnelle. ' '. $this->narration. ' '. $this->pertinencepartipris. ' '. $this->diversitenuance. ' '. $this->gestiondifficulte. ' '. $this->efficaciteinterface. ' '. $this->disponibilite. ' '. $this->messageautocritique. ' '. $this->integrationmessage. ' '. $this->coupdecoeur. ' '. $this->synergie. ' '. $this->ressourcemateriel;
    }
    
}
