<?php

class guerrier extends Player {

    public function __construct($name){
        $this->setLife(150);
        $this->setDamage(5);
        $this->setAttackable(true);
        $this->setDefense(20);
        $this->setName($name);
    }

    public function normalAttack(){
        return $this->getDamage();
    }
    public function specialAttack(){
        return $this->normalAttack() * 2.5;
    }
    public function blockAttack(){
        $this->setAttackable(false);
    }
}