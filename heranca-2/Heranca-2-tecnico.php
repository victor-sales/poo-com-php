<?php

    require_once('Heranca-2-aluno');
    class Heranca2Tecnico extends Heranca2Aluno {

        private $registroProfissional;

        public function praticar(){

        }

        public function getRegistroProfissional(){
            return $this->registroProfissional;
        }
        public function setRegistroProfissional($registroProfissional){
            $this->registroProfissional = $registroProfissional;
        }
    }

?>