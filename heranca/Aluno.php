<?php

require_once('Pessoa-heranca.php');

class Aluno extends PessoaHeranca {

    private $matricula;
    private $curso;

    public function cancelarMatricula(){
        if ($this->getMatricula(true)) {
            $this->setMatricula(false);
        }
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCurso() {
        return $this->matricula;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }
}

?>