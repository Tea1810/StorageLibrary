<?php

namespace App\Entity;

use App\Repository\CartiRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: CartiRepository::class)]
class Carti
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $Nume_Carte = null;

    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $Autor = null;
    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $Locatie = null;

    #[ORM\Column(length: 255)]
    private ?string $categorie = null;
    #[Assert\NotBlank]
    #[ORM\Column(length: 255)]
    private ?string $nationalitate = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumeCarte(): ?string
    {
        return $this->Nume_Carte;
    }

    public function setNumeCarte(string $Nume_Carte): static
    {
        $this->Nume_Carte = $Nume_Carte;

        return $this;
    }

    public function getAutor(): ?string
    {
        return $this->Autor;
    }

    public function setAutor(string $Autor): static
    {
        $this->Autor = $Autor;

        return $this;
    }

    public function getLocatie(): ?string
    {
        return $this->Locatie;
    }

    public function setLocatie(string $Locatie): static
    {
        $this->Locatie = $Locatie;

        return $this;
    }

    public function getCategorie(): ?string
    {
        return $this->categorie;
    }

    public function setCategorie(string $categorie): static
    {
        $this->categorie = $categorie;

        return $this;
    }

    public function getNationalitate(): ?string
    {
        return $this->nationalitate;
    }

    public function setNationalitate(string $nationalitate): static
    {
        $this->nationalitate = $nationalitate;

        return $this;
    }
}
