<?php

use PHPUnit\Framework\TestCase;

final class PlayerTests extends TestCase
{
    public function testStatMagePlayer(){
        $player =  new mage("Willy");
        $this->assertEquals($player->getLife(),100);
        $this->assertEquals($player->getDamage(),3);
        $this->assertEquals($player->getAttackable(),true);
        $this->assertEquals($player->getDefense(),10);
        $this->assertEquals($player->getName(),"Willy");
    }
    public function testStatGuerrierPlayer(){
        $player =  new guerrier("Arnold");
        $this->assertEquals($player->getLife(),150);
        $this->assertEquals($player->getDamage(),5);
        $this->assertEquals($player->getAttackable(),true);
        $this->assertEquals($player->getDefense(),20);
        $this->assertEquals($player->getName(),"Arnold");
    }
    public function testHealMagePlayer(){
        $player =  new mage("Willy");
        $player->healLife();
        $this->assertEquals($player->getLife(),103);
    }
    public function testAttackMagePlayer(){
        $player =  new mage("Willy");
        $this->assertEquals($player->normalAttack(),3);
    }
    public function testSpecialAttackMagePlayer(){
        $player =  new mage("Willy");
        $this->assertEquals($player->specialAttack(),4.5);
    }
    public function testBlockGuerrierPlayer(){
        $player =  new guerrier("Arnold");
        $player->setAttackable(false);
        $this->assertEquals($player->getAttackable(),false);
    }
    public function testAttackGuerrierPlayer(){
        $player =  new guerrier("Arnold");
        $this->assertEquals($player->normalAttack(),5);
    }
    public function testSpecialAttackGuerrierPlayer(){
        $player =  new guerrier("Arnold");
        $this->assertEquals($player->specialAttack(),12.5);
    }
}