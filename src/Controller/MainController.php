<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    /**
     * @Route("/api", name="api_index")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Hello World!',
        ]);
    }

    
    /**
     * @Route("/", name="app_home")
     */
    public function home(): Response
    {
        return new Response("Hello world !");
    }
}
