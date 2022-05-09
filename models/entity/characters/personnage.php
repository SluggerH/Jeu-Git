<?php

Class Personnage {

    Private $_vie = 100;
    Private $_force;
    Private $_experience;

    public function viewLife(){
        return $this->_vie;
    }

    public function crier(){
        echo " IL VA FAIRE TOUT NOIR";
    }
    
}

$mario = new Personnage;
echo $mario->viewLife();
echo $mario->crier();
