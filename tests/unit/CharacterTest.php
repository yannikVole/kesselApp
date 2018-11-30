<?php
/**
 * Created by PhpStorm.
 * User: yannik
 * Date: 23.11.2018
 * Time: 15:47
 */

namespace App\Tests\unit;


use App\Entity\Character;

use PHPUnit\Framework\TestCase;

class CharacterTest extends TestCase
{
public function testProperties(){
    $character = new Character();
    $date = new \DateTime();
    $timestamp = $date->getTimestamp();

    $character->setName('test');
    $this->assertEquals('test',$character->getName());

    $character->setLastModified($timestamp);
    $this->assertEquals($timestamp, $character->getLastModified());

    $character->setAchievementPoints(1337);
    $this->assertEquals(1337, $character->getAchievementPoints());

    $character->setBattlegroup('Vengeance / Rache');
    $this->assertEquals('Vengeance / Rache',$character->getBattlegroup());

    $character->setRealm('Eredar');
    $this->assertEquals('Eredar', $character->getRealm());

    $character->setRace(10);
    $this->assertEquals(10,$character->getRace());

    $character->setGender(1);
    $this->assertEquals(1,$character->getGender());

    $character->setClass(6);
    $this->assertEquals(6,$character->getClass());

    $character->setThumbnail('eredar/114/73268594-avatar.jpg');
    $this->assertEquals('http://render-eu.worldofwarcraft.com/character/eredar/114/73268594-avatar.jpg', $character->getThumbnail());
}
}