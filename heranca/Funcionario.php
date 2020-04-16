<?php

require_once('Pessoa-heranca.php');

class Funcionario extends PessoaHeranca {

    private $setor;
    private $trabalhando;

    public function mudarTrabalho() {
        if ($this->getTrabalhando()) {
            $this->setTrabalhando(false);
        } else {
            $this->setTrabalhando(true);
        }
    }

    public function getSetor() {
        return $this->setor;
    }

    public function setSetor($setor) {
        $this->setor = $setor;
    }

    public function getTrabalhando() {
        return $this->trabalhando;
    }

    public function setTrabalhando($trabalhando) {
        $this->trabalhando = $trabalhando;
    }

}

?>