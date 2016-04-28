<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('glud_service_homepage', new Route('/', array(
    '_controller' => 'GludServiceBundle:Default:index',
)));

return $collection;
