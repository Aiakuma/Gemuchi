<?php

namespace App\Entity;

use App\Repository\TestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TestRepository::class)
 */
class Test
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $son;

    /**
     * @ORM\Column(type="text")
     */
    private $code;

    /**
     * @ORM\Column(type="text")
     */
    private $gameplay;

    /**
     * @ORM\Column(type="text")
     */
    private $rythme;

    /**
     * @ORM\Column(type="text")
     */
    private $scenario;

    /**
     * @ORM\Column(type="text")
     */
    private $graphisme;

    /**
     * @ORM\Column(type="text")
     */
    private $accessibilite;

    /**
     * @ORM\Column(type="text")
     */
    private $disponibilite;

    /**
     * @ORM\Column(type="text")
     */
    private $ouverture_reflexion;

    /**
     * @ORM\OneToOne(targetEntity=Game::class, mappedBy="Test", cascade={"persist", "remove"})
     */
    private $game;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSon(): ?string
    {
        return $this->son;
    }

    public function setSon(string $son): self
    {
        $this->son = $son;

        return $this;
    }

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getGameplay(): ?string
    {
        return $this->gameplay;
    }

    public function setGameplay(string $gameplay): self
    {
        $this->gameplay = $gameplay;

        return $this;
    }

    public function getRythme(): ?string
    {
        return $this->rythme;
    }

    public function setRythme(string $rythme): self
    {
        $this->rythme = $rythme;

        return $this;
    }

    public function getScenario(): ?string
    {
        return $this->scenario;
    }

    public function setScenario(string $scenario): self
    {
        $this->scenario = $scenario;

        return $this;
    }

    public function getGraphisme(): ?string
    {
        return $this->graphisme;
    }

    public function setGraphisme(string $graphisme): self
    {
        $this->graphisme = $graphisme;

        return $this;
    }

    public function getAccessibilite(): ?string
    {
        return $this->accessibilite;
    }

    public function setAccessibilite(string $accessibilite): self
    {
        $this->accessibilite = $accessibilite;

        return $this;
    }

    public function getDisponibilite(): ?string
    {
        return $this->disponibilite;
    }

    public function setDisponibilite(string $disponibilite): self
    {
        $this->disponibilite = $disponibilite;

        return $this;
    }

    public function getOuvertureReflexion(): ?string
    {
        return $this->ouverture_reflexion;
    }

    public function setOuvertureReflexion(string $ouverture_reflexion): self
    {
        $this->ouverture_reflexion = $ouverture_reflexion;

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
            $this->game->setTest(null);
        }

        // set the owning side of the relation if necessary
        if ($game !== null && $game->getTest() !== $this) {
            $game->setTest($this);
        }

        $this->game = $game;

        return $this;
    }

    public function __toString()
    {
        return $this->son. ' '. $this->code. ' '. $this->gameplay. ' '. $this->rythme. ' '. $this->scenario. ' '. $this->graphisme. ' '. $this->accessibilite. ' '. $this->disponibilite. ' '. $this->ouverture_reflexion;
    }
}
