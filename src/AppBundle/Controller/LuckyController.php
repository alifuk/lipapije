<?php

// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{min}/{max}")
     */
    public function numberAction($min, $max)
    {
        $number = mt_rand($min, $max);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }
    
    /**
     * @Route("/lucky/leg/")
     */
    public function shiiitAction()
    {
        return $this->render('base.html.twig', ['mmm' => "af" ]);
    }
}