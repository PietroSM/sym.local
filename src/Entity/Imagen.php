<?php

namespace App\Entity;

use App\Repository\ImagenRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ImagenRepository::class)]
class Imagen
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $nombre = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $descripcion = null;

    #[ORM\Column(nullable: true)]
    private ?int $categoria = null;

    #[ORM\Column(nullable: true)]
    private ?int $numVisualizaviones = null;

    #[ORM\Column(nullable: true)]
    private ?int $numLike = null;

    #[ORM\Column(nullable: true)]
    private ?int $numDownload = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): static
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getDescripcion(): ?string
    {
        return $this->descripcion;
    }

    public function setDescripcion(?string $descripcion): static
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    public function getCategoria(): ?int
    {
        return $this->categoria;
    }

    public function setCategoria(?int $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getNumVisualizaviones(): ?int
    {
        return $this->numVisualizaviones;
    }

    public function setNumVisualizaviones(?int $numVisualizaviones): static
    {
        $this->numVisualizaviones = $numVisualizaviones;

        return $this;
    }

    public function getNumLike(): ?int
    {
        return $this->numLike;
    }

    public function setNumLike(?int $numLike): static
    {
        $this->numLike = $numLike;

        return $this;
    }

    public function getNumDownload(): ?int
    {
        return $this->numDownload;
    }

    public function setNumDownload(?int $numDownload): static
    {
        $this->numDownload = $numDownload;

        return $this;
    }
}
