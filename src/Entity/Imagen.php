<?php

namespace App\Entity;

use App\Repository\ImagenRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ImagenRepository::class)]
class Imagen
{
    const RUTA_IMAGENES_PORTFOLIO = '/images/index/portfolio/';
    const RUTA_IMAGENES_GALERIA = '/images/index/gallery/';
    const RUTA_IMAGENES_CLIENTES = '/images/clients/';
    const RUTA_IMAGENES_SUBIDAS = '/images/galeria/';


    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100, nullable: true)]
    /**
     * @Assert\File(
     * mimeTypes={"image/jpeg","image/png"},
     * mimeTypesMessage = "Solamente se permiten archivos jpeg o png.")
     */
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

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $password = null;



    public function __construct(
        $nombre = "",
        $descripcion = "",
        $categoria = 1,
        $numVisualizaviones = 0,
        $numLikes = 0,
        $numDownload = 0,
        $password = ""
    ) {
        $this->id = null;
        $this->nombre = $nombre;
        $this->descripcion  = $descripcion;
        $this->categoria = $categoria;
        $this->numVisualizaviones = $numVisualizaviones;
        $this->numLikes = $numLikes;
        $this->numDownload = $numDownload;
        $this->password = $password;
    }

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


    public function getUrlPortfolio()
    {
        return self::RUTA_IMAGENES_PORTFOLIO . $this->getNombre();
    }
    public function getUrlGaleria()
    {
        return self::RUTA_IMAGENES_GALERIA . $this->getNombre();
    }
    public function getUrlClientes()
    {
        return self::RUTA_IMAGENES_CLIENTES . $this->getNombre();
    }
    public function getUrlSubidas()
    {
        return self::RUTA_IMAGENES_SUBIDAS . $this->getNombre();
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $password): static
    {
        $this->password = $password;

        return $this;
    }
}
