<?php

require_once('Animal.php');
class Peixe extends Animal {

    private $corEscama;

    public function soltarBolha() {
        echo '<p>blub blub</p>';
    }

    public function locomover(){
        echo '<p>Nadando</p>';
    }

    public function alimentar(){
        echo '<p>Mordendo</p>';
    }

    public function emitirSom(){
        echo '<p>Som de peixe</p>';
    }

    public function getCorEscama(){
        return $this->corEscama;
    }

    public function setCorEscama($corEscama){
        $this->corEscama = $corEscama;
    }
}

?>