<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Extra\Intl\IntlExtension;


$twig = new \Twig\Environment($loader);
$twig->addExtension(new IntlExtension());

// date_default_timezone_set('Europe/Paris');





class DemoController extends AbstractController
{

    #[Route('/demo', name: 'app_demo')]
    public function index(): Response
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            
        ]);


        
        
    }

    
}


