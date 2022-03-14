<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class Home extends AbstractController{

    public function homepage(){

        $labels = [

            'Email',
            'Password'

        ];

        $rotas = [

            "register",
            'login',
            'blog'

        ];

        return $this->render('Window/home.html.twig', [
            'title' => 'Estou vindo do controller',
            'labels' => $labels,
            'rotas' => $rotas
        ]);
    }

    public function login(){

        return $this->render('Window/login.html.twig', [
            'title' => "Login"
        ]);


    }

    public function register(){


        return $this->render('Window/register.html.twig', [

        ]);
        
    }
}