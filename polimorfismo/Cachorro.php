<?php

    require_once('Mamifero.php');
    class Cachorro extends Mamifero {
        
        public function reagirFrase($frase) {

            if ($frase == 'toma comida' || $frase == 'olá') {
                echo 'Abanar e latir';
            }
        }

        public function reagirHora($hora, $min) {

            if ($hora < 12) {
                echo 'Abanar';
            } elseif ($hora >= 18) {
                echo 'Ignorar';
            } else {
                echo 'Abanar e latir';
            }
        }

        public function reagirDono($dono) {

            if ($dono) {
                echo 'Abanar e latir';
            } else {
                echo 'Rosnar';
            }
        }

        // public function reagir($idade, $peso) {

        // }
    }

?>