<?php

class mage extends player {
    public function specialAttack(){
        print $this->getDamage() * 1.5;
    }
}