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

    $character->setName('test');
    $this->assertEquals('test',$character->getName());
    $date = new \DateTime();
    $timestamp = $date->getTimestamp();
    $character->setLastModified($timestamp);
    $this->assertEquals($timestamp, $character->getLastModified());
    $character->setAchievementPoints(1337);
    $this->assertEquals(1337, $character->getAchievementPoints());
    $character->setBattlegroup('Vengeance / Rache');
    $this->assertEquals('Vengeance / Rache',$character->getBattlegroup());
}
}