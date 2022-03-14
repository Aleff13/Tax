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

        $users = [

            "aleff",
            'ingrid',
            'agatha'

        ];

        return $this->render('homepage/homepage.html.twig', [
            'title' => 'Estou vindo do controller',
            'labels' => $labels,
            'users' => $users
        ]);
    }

    public function login(){

        return new Response("Future page for using ");
    }
}