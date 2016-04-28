<?php

namespace Glud\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HolaMundoController extends Controller
{
    /**
     * @Route("/hola",name="holamundo")
     */
    public function indexAction()
    {

      $servicioHola = $this->get("app.decirHola");
      $saludo = $servicioHola->decirHola();
        return $this->render('GludServiceBundle:HolaMundo:index.html.twig', array('saludo'=>$saludo
        ));
    }

}
