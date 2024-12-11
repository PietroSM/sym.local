<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'sym_index')]
    public function index()
    {
        $nombre = 'María';
        $saludo = 'Buenos días';
        return $this->render('prueba.html.twig', [
            'nombre' => $nombre,
            'saludo' => $saludo
        ]);
    }


    public function abaut() {
        return $this->render('prueba1.html.twig');
    }


    public function index2()
    {
        $nombre = 'Juan';
        $saludo = 'Buenos días a todos';
        $nombres = ['Ana', 'Enrique', 'Laura', 'Pablo'];
        return $this->render('prueba2.html.twig', [
            'nombre' => $nombre,
            'saludo' => $saludo,
            'nombres' => $nombres,
            'fecha' => new \DateTime()
        ]);
    }
}
