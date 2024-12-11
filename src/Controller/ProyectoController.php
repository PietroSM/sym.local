<?php

namespace App\Controller;

use App\Entity\Imagen;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ProyectoController extends AbstractController{
    
    #[Route('/', name: 'sym_index')]
    public function index(){
        $imagenesHome[] = new Imagen('1.jpg', 'Imagen_1',1,456,61,130);
        $imagenesHome[] = new Imagen('1.jpg', 'Imagen_1',1,456,61,130);
        $imagenesHome[] = new Imagen('2.jpg', 'Imagen_2',2,455,64,130);
        $imagenesHome[] = new Imagen('3.jpg', 'Imagen_3',3,4,10,130);
        $imagenesHome[] = new Imagen('4.jpg', 'Imagen_4',1,46,50,130);
        $imagenesHome[] = new Imagen('9.jpg', 'Imagen_9',1,156,610,130);
        $imagenesHome[] = new Imagen('10.jpg', 'Imagen_10',2,956,610,130);
        $imagenesHome[] = new Imagen('11.jpg', 'Imagen_11',3,1456,610,130);
        $imagenesHome[] = new Imagen('12.jpg', 'Imagen_12',1,4356,610,130);
        $imagenesHome[] = new Imagen('12.jpg', 'Imagen_12',1,4356,610,130);

        return $this->render('index.view.html.twig', [
            'imagenes' => $imagenesHome
        ]);
    }


    #[Route('/about', name: 'sym_about')]
    public function about(){

        $imagenesCliente[] = new Imagen('client1.jpg' ,'MISS BELLA');
        $imagenesCliente[] = new Imagen('client2.jpg', 'DON PENO');
        $imagenesCliente[] = new Imagen('client3.jpg', 'SWEETY');
        $imagenesCliente[] = new Imagen('client4.jpg', 'LADY');

        return $this->render('about.view.html.twig', [
            'imagenes' => $imagenesCliente
        ]);
    }


    #[Route('/blog', name: 'sym_blog')]
    public function blog(){

        return $this->render('blog.view.html.twig');
    }


    #[Route('/contact', name: 'sym_contact')]
    public function contact(){

        return $this->render('contact.view.html.twig');
    }

}