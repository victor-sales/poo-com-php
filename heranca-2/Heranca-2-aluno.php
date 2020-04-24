<?php

    require_once('Heranca-2-pessoa');

    class Heranca2Aluno extends Heranca2Pessoa {

        private $matricula;
        private $curso;

        public function pagarMensalidade() {

        }

        public function getMatricula(){
            return $this->matricula;
        }

        public function setMatricula($matricula){
            $this->matricula = $matricula;
        }

        public function getCurso(){
            return $this->curso;
        }

        public function setCurso($curso){
            $this->curso = $curso;
        }
        
    }


?>