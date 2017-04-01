<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pub;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        return new Response("index");
        // replace this example code with whatever you need
        /*return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);*/
    }

    /**
     * @Route("/hospoda/pridat/{name}/{adress}/{stars}", name="home")
     */
    public function hospodaAction(string $name, string $adress, int $stars)
    {
        $hospoda = new Pub();
        $hospoda->setName($name);
        $hospoda->setAdress($adress);
        $hospoda->setStars($stars);

        $em = $this->getDoctrine()->getManager();

        // tells Doctrine you want to (eventually) save the Product (no queries yet)
        $em->persist($hospoda);

        // actually executes the queries (i.e. the INSERT query)
        $em->flush();


        // replace this example code with whatever you need
        return new Response("Přidána hospoda: " . $name . " " . $hospoda->getId());
    }
}
