<?php

    require_once('Heranca-2-aluno');
    class Heranca2Bolsista extends Heranca2Aluno {

        private $bolsa;

        public function renovarBolsa(){

        }

        public function pagarMensalidade() {
            
        }

        public function getBolsa(){
            return $this->bolsa;
        }
        public function setBolsa($bolsa){
            $this->bolsa = $bolsa;
        }
    }

?>