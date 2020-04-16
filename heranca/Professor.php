<?php

require_once('Pessoa-heranca.php');

class Professor extends PessoaHeranca {

    private $especialidade;
    private $salario;

    public function receberAum($aumento) {
        $this->setSalario($this->getSalario() + $aumento);
    }

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;

    }
}

?>