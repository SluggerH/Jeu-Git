<?php

class mage extends player {
    public function specialAttack(){
        print $this->getDamage() * 1.5;
    }
    public function healLife(){
        $this->setLife($this->getLife() + 3);
    }
}