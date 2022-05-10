<?php

class mageMonster extends Monster {

    public function __construct($name){
        $this->setLife(80);
        $this->setDamage(4);
        $this->setDefense(5);
        $this->setName($name);
    }

    public function normalAttack($defense, $life){
        return $life - ($this->getDamage()-(($this->getDamage()*$defense)/100));
    }
    public function specialAttack(){
        return $this->normalAttack() * 1.5;
    }
    public function healLife(){
        $this->setLife($this->getLife() + 5);
    }
}