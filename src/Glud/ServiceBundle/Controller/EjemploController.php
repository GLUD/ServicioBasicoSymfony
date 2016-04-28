<?php

namespace Glud\ServiceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class EjemploController extends Controller
{
    /**
     * @Route("/ejemplo")
     */
    public function ejemploAction()
    {
        return $this->render('GludServiceBundle:Ejemplo:ejemplo.html.twig', array(
            // ...
        ));
    }

}
