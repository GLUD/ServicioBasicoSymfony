<?php

namespace Glud\ServiceBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class EjemploControllerTest extends WebTestCase
{
    public function testEjemplo()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/ejemplo');
    }

}
