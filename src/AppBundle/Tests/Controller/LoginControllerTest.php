<?php

namespace AppBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use Symfony\Component\BrowserKit\Cookie;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;


class LoginControllerTest extends WebTestCase
{
    private $client = null;

    public function setUp()
    {
        $this->client = static::createClient();
    }

    public function testSecuredHello()
    {
        $this->login();

        $crawler = $this->client->request('GET','/admin');

        $this->assertTrue($this->client->getResponse()->isSuccessful());
        $this->assertGreaterThan(0,$crawler->filter('html.contains("Admin Dashboard")')->count());
    }

    public function login()
    {
        $session = $this->client->getContainer()->get('session');

        $firewall = 'secured_area';
        $token = new UsernamePasswordToken('admin',null,$firewall,array('ROLE_ADMIN'));
        $session->set('_security_'.$firewall,serialize($token));
        $session->save();

        $cookie = new Cookie($session->getName(),$session->getId());
        $this->client->getCookieJar()->set($cookie);
    }
}