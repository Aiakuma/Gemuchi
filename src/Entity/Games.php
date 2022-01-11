<?php

namespace App\Entity;

use App\Repository\GamesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GamesRepository::class)
 */
class Games
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=0)
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $year;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $authors;

    /**
     * @ORM\Column(type="text")
     */
    private $resume;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $picture;

    /**
     * @ORM\OneToOne(targetEntity=Notes::class, inversedBy="games", cascade={"persist", "remove"})
     */
    private $Notes;

    /**
     * @ORM\OneToOne(targetEntity=Tests::class, inversedBy="games", cascade={"persist", "remove"})
     */
    private $Tests;

    /**
     * @ORM\ManyToMany(targetEntity=Categories::class, inversedBy="games")
     */
    private $Categories;

    /**
     * @ORM\ManyToMany(targetEntity=Consoles::class, inversedBy="games")
     */
    private $Consoles;

    public function __construct()
    {
        $this->Categories = new ArrayCollection();
        $this->Consoles = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getYear(): ?int
    {
        return $this->year;
    }

    public function setYear(int $year): self
    {
        $this->year = $year;

        return $this;
    }

    public function getAuthors(): ?string
    {
        return $this->authors;
    }

    public function setAuthors(string $authors): self
    {
        $this->authors = $authors;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getNotes(): ?Notes
    {
        return $this->Notes;
    }

    public function setNotes(?Notes $Notes): self
    {
        $this->Notes = $Notes;

        return $this;
    }

    public function getTests(): ?Tests
    {
        return $this->Tests;
    }

    public function setTests(?Tests $Tests): self
    {
        $this->Tests = $Tests;

        return $this;
    }

    /**
     * @return Collection|Categories[]
     */
    public function getCategories(): Collection
    {
        return $this->Categories;
    }

    public function addCategory(Categories $category): self
    {
        if (!$this->Categories->contains($category)) {
            $this->Categories[] = $category;
        }

        return $this;
    }

    public function removeCategory(Categories $category): self
    {
        $this->Categories->removeElement($category);

        return $this;
    }

    /**
     * @return Collection|Consoles[]
     */
    public function getConsoles(): Collection
    {
        return $this->Consoles;
    }

    public function addConsole(Consoles $console): self
    {
        if (!$this->Consoles->contains($console)) {
            $this->Consoles[] = $console;
        }

        return $this;
    }

    public function removeConsole(Consoles $console): self
    {
        $this->Consoles->removeElement($console);

        return $this;
    }
}
