<?php

require_once('Animal.php');
class Ave extends Animal {

    private $corPena;

    public function fazerNinho() {
        echo '<p>Fazendo ninho</p>';
    }

    public function locomover(){
        echo '<p>Pulando</p>';
    }

    public function alimentar(){
        echo '<p>Bicando</p>';
    }

    public function emitirSom(){
        echo '<p>Som de ave</p>';
    }

    public function getCorPena(){
        return $this->corPena;
    }

    public function setCorPena($corPena){
        $this->corPena = $corPena;
    }
}

?>