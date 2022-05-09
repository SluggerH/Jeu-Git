<?php

class guerrier extends player {
    public function normalAttack(){

    }
    public function specialAttack(){
        print $this->getDamage() * 2.5;
    }
    public function blockAttack(){
        $this->setAttackable(false);
    }
}