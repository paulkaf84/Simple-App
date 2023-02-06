<?php

namespace App\Tests\Controller;

use App\Controller\SecurityController;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SecurityControllerTest extends WebTestCase
{

    public function testLogout()
    {
        $client = $this->createClient();

        $client->request("GET", "/logout");
        self::assertSame(302, $client->getResponse()->getStatusCode());

    }

    public function testLogin()
    {
        $client = $this->createClient();
        $user = new User;
        /*$user->setEmail("paulkaf84@gmail.com")
            ->setPassword("6543210");*/
        $client->loginUser($user);
        $client->request("GET", "/login");

        self::assertSame(200, $client->getResponse()->getStatusCode());
    }

    public function testAdmin()
    {

    }
}
