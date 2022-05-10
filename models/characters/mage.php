<?php

class mage extends Player {

    public function __construct($name){
        $this->setLife(100);
        $this->setDamage(3);
        $this->setAttackable(true);
        $this->setDefense(10);
        $this->setName($name);
    }

    public function normalAttack($defense, $life){
        return $life - ($this->getDamage()-(($this->getDamage()*$defense)/100));
    }
    public function specialAttack($defense, $life){
        return $life - (($this->getDamage()* 1.5)-((($this->getDamage()* 1.5)*$defense)/100));
    }
    public function healLife(){
        $this->setLife($this->getLife() + 3);
    }
}