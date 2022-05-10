<?php

use PHPUnit\Framework\TestCase;

final class PlayerTests extends TestCase
{
    public function testStatMagePlayer(){
        $player = new mage("Willy");
        $this->assertEquals($player->getLife(),100);
        $this->assertEquals($player->getDamage(),3);
        $this->assertEquals($player->getAttackable(),true);
        $this->assertEquals($player->getDefense(),10);
        $this->assertEquals($player->getName(),"Willy");
    }
    public function testStatGuerrierPlayer(){
        $player = new guerrier("Arnold");
        $this->assertEquals($player->getLife(),150);
        $this->assertEquals($player->getDamage(),5);
        $this->assertEquals($player->getAttackable(),true);
        $this->assertEquals($player->getDefense(),20);
        $this->assertEquals($player->getName(),"Arnold");
    }
    public function testHealMagePlayer(){
        $player = new mage("Willy");
        $player->healLife();
        $this->assertEquals($player->getLife(),103);
    }
    public function testAttackMagePlayerOnMageMonster(){
        $player = new mage("Willy");
        $monster = new mageMonster('Gérald');
        $this->assertEquals($player->normalAttack($monster->getDefense(), $monster->getLife()),77.15);
    }
    public function testSpecialAttackMagePlayerOnMageMonster(){
        $player = new mage("Willy");
        $monster = new mageMonster('Gérald');
        $this->assertEquals($player->specialAttack($monster->getDefense(), $monster->getLife()),75.725);
    }
    public function testBlockGuerrierPlayer(){
        $player = new guerrier("Arnold");
        $player->setAttackable(false);
        $this->assertEquals($player->getAttackable(),false);
    }
    public function testAttackGuerrierPlayerOnMageMonster(){
        $player = new guerrier("Arnold");
        $monster = new mageMonster('Gérald');
        $this->assertEquals($player->normalAttack($monster->getDefense(), $monster->getLife()),75.25);
    }
    public function testSpecialAttackGuerrierPlayerOnMageMonster(){
        $player = new guerrier("Arnold");
        $monster = new mageMonster('Gérald');
        $this->assertEquals($player->specialAttack($monster->getDefense(), $monster->getLife()),68.125);
    }
    public function testAttackMageMonsterOnMagePlayer(){
        $player = new mage("Willy");
        $monster = new mageMonster('Gérald');
        $this->assertEquals($monster->normalAttack($player->getDefense(), $player->getLife()), 96.4);
    }
    public function testAttackMageMonsterOnGuerrierPlayer(){
        $player = new guerrier("Arnold");
        $monster = new mageMonster('Gérald');
        $this->assertEquals($monster->normalAttack($player->getDefense(), $player->getLife()), 146.8);
    }
}