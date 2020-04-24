<?php

    require_once('Heranca-2-pessoa');
    class Heranca2Professor extends Heranca2Pessoa {

        private $especialidade;
        private $salario;

        public function receberAumento($valor) {
            $this->setSalario($this->getSalario() + $valor);
        }

        private function getEspecialidade(){
            return $this->especialidade;
        }
        private function setEspecialide($especialidade){
            $this->especialidade = $especialidade;
        }
        private function getSalario(){
            return $this->salario;
        }
        private function setSalario($salario){
            $this->salario = $salario;
        }

    }

?>