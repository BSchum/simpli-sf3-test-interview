<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DataControllerTest extends WebTestCase
{
    public function testOrganizeinputdata()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/my-work');
    }

}
