<?php

namespace App\Entity;

use App\Repository\ImagenRepository;
use Doctrine\DBAL\Types\Types;
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
    private ?int $numVisualizaviones = null;

    #[ORM\Column(nullable: true)]
    private ?int $numLike = null;

    #[ORM\Column(nullable: true)]
    private ?int $numDownload = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $password = null;

    #[ORM\ManyToOne(inversedBy: 'imagens')]
    private ?Categoria $categoria = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $fecha = null;

    #[ORM\ManyToOne(inversedBy: 'imagens')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $usuario = null;


    public function __construct(
        $nombre = "",
        $descripcion = "",
        $numVisualizaviones = 0,
        $numLikes = 0,
        $numDownload = 0,
        $password = ""
    ) {
        $this->id = null;
        $this->nombre = $nombre;
        $this->descripcion  = $descripcion;
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

    public function getCategoria(): ?Categoria
    {
        return $this->categoria;
    }

    public function setCategoria(?Categoria $categoria): static
    {
        $this->categoria = $categoria;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(\DateTimeInterface $fecha): static
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getUsuario(): ?User
    {
        return $this->usuario;
    }

    public function setUsuario(?User $usuario): static
    {
        $this->usuario = $usuario;

        return $this;
    }
}
