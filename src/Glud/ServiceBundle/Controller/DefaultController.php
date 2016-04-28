<?php

namespace Glud\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    public function indexAction()
    {
      $servicioHola = $this->get("app.decirHola");
      $saludo = $servicioHola->decirHola();
      return $this->render('GludServiceBundle:HolaMundo:index.html.twig', array('saludo'=>$saludo
      ));
    }
}
