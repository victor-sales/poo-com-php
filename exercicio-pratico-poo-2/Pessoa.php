<?php

class Pessoa {

    public $nome;
    public $idade;
    public $sexo;

    public function __construct($nome, $idade, $sexo){
        $this->setNome($nome);
        $this->setidade($idade);
        $this->setSexo($sexo);
    }

    public function fazerAniver(){
        $this->setIdade($this->getIdade() + 1);
    }

    public function getNome(){
        return $this->nome;
    }

    private function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->idade;
    }  

    private function setIdade($idade){
        $this->idade = $idade;
    }

    public function getSexo(){
        return $this->sexo;
    }

    private function setSexo($sexo){
        $this->sexo = $sexo;
    }


}

?>