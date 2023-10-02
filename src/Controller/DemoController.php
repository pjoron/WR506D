<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Extra\Intl\IntlExtension;
use App\Service\Slugify;


$twig = new \Twig\Environment($loader);
$twig->addExtension(new IntlExtension());

// date_default_timezone_set('Europe/Paris');





class DemoController extends AbstractController
{

    #[Route('/demo', name: 'app_demo')]
    
    public function index(Slugify $slugify): Response
    {
        $slug = $slugify->slugify('Hello World!');
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'slug' => $slug,
            
        ]);


        
        
    }

    
}


