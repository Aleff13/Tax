<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class Home{


    public function homepage(){

        return new Response('Hello');

    }

}