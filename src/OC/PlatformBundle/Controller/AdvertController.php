<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

// N'oubliez pas ce use :
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{

  public function viewAction($id)
  {
      return new Response("Affichage de l'annonce d'id : " . $id);
  }

  public function viewSlugAction($slug, $year, $format)
  {
    return new Response(
      "On pourrait afficher l'annonce correspondant au slug '" . $slug . "', créér en " . $year . " et au format " . $format . "."
    );
  }

  public function indexAction()
  {
    $content = $this->get('templating')->render('OCPlatformBundle:Advert:index.html.twig', array('name' => 'Nico') );

    return new Response($content);
  }
}
