<?php

namespace App\Controller;

use App\Entity\Imagen;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ImagenController extends AbstractController
{
    #[Route('/imagen', name: 'sym_imagen')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $imagenes = $doctrine->getRepository(Imagen::class)->findAll();

        return $this->render('imagen/index.html.twig', [
            'imagenes' => $imagenes
        ]);
    }


    #[Route('/imagen/{id}', name: 'sym_imagen_show')]
    public function show(Imagen $imagen): Response
    {
        return $this->render('imagen/show.html.twig', [
            'imagen' => $imagen
        ]);
    }

    
}