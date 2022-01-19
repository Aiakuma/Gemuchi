<?php

namespace App\Entity;

use App\Repository\NotesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NotesRepository::class)
 */
class Notes
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
    private $absence_bug;

    /**
     * @ORM\Column(type="float")
     */
    private $temps_chargement;

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
    private $rendement_horaire;

    /**
     * @ORM\Column(type="float")
     */
    private $phase_jeu;

    /**
     * @ORM\Column(type="float")
     */
    private $charge_emotionnelle;

    /**
     * @ORM\Column(type="float")
     */
    private $narration;

    /**
     * @ORM\Column(type="float")
     */
    private $pertinence_parti_pris;

    /**
     * @ORM\Column(type="float")
     */
    private $diversite_nuance;

    /**
     * @ORM\Column(type="float")
     */
    private $environnement;

    /**
     * @ORM\Column(type="float")
     */
    private $gestion_difficulte;

    /**
     * @ORM\Column(type="float")
     */
    private $efficacite_interface;

    /**
     * @ORM\Column(type="float")
     */
    private $cout_ressource;

    /**
     * @ORM\Column(type="float")
     */
    private $poid_ressource;

    /**
     * @ORM\Column(type="float")
     */
    private $disponibilite;

    /**
     * @ORM\Column(type="float")
     */
    private $message_autocritique;

    /**
     * @ORM\Column(type="float")
     */
    private $integration_message;

    /**
     * @ORM\Column(type="float")
     */
    private $coup_de_coeur;

    /**
     * @ORM\OneToOne(targetEntity=Games::class, mappedBy="Notes", cascade={"persist", "remove"})
     */
    private $games;

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
        return $this->absence_bug;
    }

    public function setAbsenceBug(float $absence_bug): self
    {
        $this->absence_bug = $absence_bug;

        return $this;
    }

    public function getTempsChargement(): ?float
    {
        return $this->temps_chargement;
    }

    public function setTempsChargement(float $temps_chargement): self
    {
        $this->temps_chargement = $temps_chargement;

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
        return $this->rendement_horaire;
    }

    public function setRendementHoraire(float $rendement_horaire): self
    {
        $this->rendement_horaire = $rendement_horaire;

        return $this;
    }

    public function getPhaseJeu(): ?float
    {
        return $this->phase_jeu;
    }

    public function setPhaseJeu(float $phase_jeu): self
    {
        $this->phase_jeu = $phase_jeu;

        return $this;
    }

    public function getChargeEmotionnelle(): ?float
    {
        return $this->charge_emotionnelle;
    }

    public function setChargeEmotionnelle(float $charge_emotionnelle): self
    {
        $this->charge_emotionnelle = $charge_emotionnelle;

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
        return $this->pertinence_parti_pris;
    }

    public function setPertinencePartiPris(float $pertinence_parti_pris): self
    {
        $this->pertinence_parti_pris = $pertinence_parti_pris;

        return $this;
    }

    public function getDiversiteNuance(): ?float
    {
        return $this->diversite_nuance;
    }

    public function setDiversiteNuance(float $diversite_nuance): self
    {
        $this->diversite_nuance = $diversite_nuance;

        return $this;
    }

    public function getEnvironnement(): ?float
    {
        return $this->environnement;
    }

    public function setEnvironnement(float $environnement): self
    {
        $this->environnement = $environnement;

        return $this;
    }

    public function getGestionDifficulte(): ?float
    {
        return $this->gestion_difficulte;
    }

    public function setGestionDifficulte(float $gestion_difficulte): self
    {
        $this->gestion_difficulte = $gestion_difficulte;

        return $this;
    }

    public function getEfficaciteInterface(): ?float
    {
        return $this->efficacite_interface;
    }

    public function setEfficaciteInterface(float $efficacite_interface): self
    {
        $this->efficacite_interface = $efficacite_interface;

        return $this;
    }

    public function getCoutRessource(): ?float
    {
        return $this->cout_ressource;
    }

    public function setCoutRessource(float $cout_ressource): self
    {
        $this->cout_ressource = $cout_ressource;

        return $this;
    }

    public function getPoidRessource(): ?float
    {
        return $this->poid_ressource;
    }

    public function setPoidRessource(float $poid_ressource): self
    {
        $this->poid_ressource = $poid_ressource;

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
        return $this->message_autocritique;
    }

    public function setMessageAutocritique(float $message_autocritique): self
    {
        $this->message_autocritique = $message_autocritique;

        return $this;
    }

    public function getIntegrationMessage(): ?float
    {
        return $this->integration_message;
    }

    public function setIntegrationMessage(float $integration_message): self
    {
        $this->integration_message = $integration_message;

        return $this;
    }

    public function getCoupDeCoeur(): ?float
    {
        return $this->coup_de_coeur;
    }

    public function setCoupDeCoeur(float $coup_de_coeur): self
    {
        $this->coup_de_coeur = $coup_de_coeur;

        return $this;
    }

    public function getGames(): ?Games
    {
        return $this->games;
    }

    public function setGames(?Games $games): self
    {
        // unset the owning side of the relation if necessary
        if ($games === null && $this->games !== null) {
            $this->games->setNotes(null);
        }

        // set the owning side of the relation if necessary
        if ($games !== null && $games->getNotes() !== $this) {
            $games->setNotes($this);
        }

        $this->games = $games;

        return $this;
    }
}
