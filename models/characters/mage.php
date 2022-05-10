<?php

class mage extends Player {

    public function __construct($name){
        $this->setLife(100);
        $this->setDamage(3);
        $this->setAttackable(true);
        $this->setDefense(10);
        $this->setName($name);
    }

    public function normalAttack(){
        return $this->getDamage();
    }
    public function specialAttack(){
        print $this->normalAttack() * 1.5;
    }
    public function healLife(){
        $this->setLife($this->getLife() + 3);
    }
}