<?php
/**
 * Created by PhpStorm.
 * User: yannik
 * Date: 08.11.2018
 * Time: 17:17
 */

namespace App\Tests\unit;


use App\Entity\Character;
use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testSetGetAccountName(){
        $user = new User();

        $user->setAccountName('testAccount');

        $this->assertEquals($user->getAccountName(),'testAccount');
    }

    public function testSetGetEmail(){
        $user = new User();

        $user->setEmail('test@test.de');

        $this->assertEquals($user->getEmail(),'test@test.de');
    }

    public function testSetGetCharacter(){
        $user = new User();
        $character = new Character();
        $user->setIgCharacter($character);
        $user->getIgCharacter()->setUser($user);

        $this->assertEquals($user->getIgCharacter(),$character);
        $this->assertEquals($user->getIgCharacter()->getUser(),$user);
    }
}