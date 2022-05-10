<?php

class guerrier extends Player {

    public function __construct($name){
        $this->setLife(150);
        $this->setDamage(5);
        $this->setAttackable(true);
        $this->setDefense(20);
        $this->setName($name);
    }

    public function normalAttack($defense, $life){
        return $life - ($this->getDamage()-(($this->getDamage()*$defense)/100));
    }
    public function specialAttack($defense, $life){
        return $life - (($this->getDamage()* 2.5)-((($this->getDamage()* 2.5)*$defense)/100));
    }
    public function blockAttack(){
        $this->setAttackable(false);
    }
}