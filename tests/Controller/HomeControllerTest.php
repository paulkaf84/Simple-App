<?php
namespace App\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class HomeControllerTest extends WebTestCase
{

    public function testIndex()
    {
        $client = $this->createClient();
        $client->request("GET", "/");

        $this->assertArrayHasKey("KERNEL_CLASS", $_SERVER);
        //$this->assertResponseIsSuccessful();
        $this->assertSame(200, $client->getResponse()->getStatusCode());
    }
}
