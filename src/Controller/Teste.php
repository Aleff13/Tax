<?php 

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Teste{


    public function exibir(){

        return new Response("Estou mostrando batattinha");

    }

}