<?php
/**
 * Created by PhpStorm.
 * User: yannik
 * Date: 26.11.2018
 * Time: 09:42
 */

namespace App\Tests\controller;


use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testShowIndex(){
        $client = static::createClient();
        $crawler = $client->request('GET','/');
        $this->assertEquals(200,$client->getResponse()->getStatusCode());
        $this->assertGreaterThan(0,$crawler->filter('html:contains("Kessel App")')->count());
    }


}