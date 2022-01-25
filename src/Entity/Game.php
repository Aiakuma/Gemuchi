<?php

namespace App\Entity;

use App\Repository\GameRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GameRepository::class)
 */
class Game
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
    private $author;

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
     * @ORM\OneToOne(targetEntity=Note::class, inversedBy="game", cascade={"persist", "remove"})
     */
    private $Note;

    /**
     * @ORM\OneToOne(targetEntity=Test::class, inversedBy="game", cascade={"persist", "remove"})
     */
    private $Test;

    /**
     * @ORM\ManyToMany(targetEntity=Category::class, inversedBy="game")
     */
    private $Category;

    /**
     * @ORM\ManyToMany(targetEntity=Console::class, inversedBy="game")
     */
    private $Console;

    public function __construct()
    {
        $this->Category = new ArrayCollection();
        $this->Console = new ArrayCollection();
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

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

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

    public function getNote(): ?Note
    {
        return $this->Note;
    }

    public function setNote(?Note $Note): self
    {
        $this->Note = $Note;

        return $this;
    }

    public function getTest(): ?Test
    {
        return $this->Test;
    }

    public function setTest(?Test $Test): self
    {
        $this->Test = $Test;

        return $this;
    }

    /**
     * @return Collection|Category[]
     */
    public function getCategory(): Collection
    {
        return $this->Category;
    }

    public function addCategory(Category $category): self
    {
        if (!$this->Category->contains($category)) {
            $this->Category[] = $category;
        }

        return $this;
    }

    public function removeCategory(Category $category): self
    {
        $this->Category->removeElement($category);

        return $this;
    }

    /**
     * @return Collection|Console[]
     */
    public function getConsole(): Collection
    {
        return $this->Console;
    }

    public function addConsole(Console $console): self
    {
        if (!$this->Console->contains($console)) {
            $this->Console[] = $console;
        }

        return $this;
    }

    public function removeConsole(Console $console): self
    {
        $this->Console->removeElement($console);

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }
}
