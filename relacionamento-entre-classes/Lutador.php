<?php

    class Lutador {

        private $nome;
        private $nacionalidade;
        private $idade;
        private $altura;
        private $peso;
        private $categoria;
        private $vitorias;
        private $derrotas;
        private $empates;

        public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates){
            $this->setNome($nome);
            $this->setNacionalidade($nacionalidade);
            $this->setIdade($idade);
            $this->setAltura($altura);
            $this->setPeso($peso);
            $this->setVitorias($vitorias);
            $this->setDerrotas($derrotas);
            $this->setEmpates($empates);
        }

        public function apresentar(){
            echo "<br>Nome: " . $this->getNome();
            echo "<br>Nacionalidade: " . $this->getNacionalidade();
            echo "<br>Idade: " . $this->getIdade();
            echo "<br>Altura: " . $this->getAltura();
            echo "<br>Peso: " . $this->getPeso();
            echo "<br>Categoria: " . $this->getCategoria();
            echo "<br>Vitorias: " . $this->getVitorias();
            echo "<br>Empates: " . $this->getEmpates();
            echo "<br>Derrotas: " . $this->getDerrotas();
        }

        public function status(){
            echo $this->getNome() . " é um peso " . $this->getCategoria() . ". Possui " . $this->getVitorias() . " vitórias, " . $this->getDerrotas() . " derrotas e " . $this->getEmpates() . " empates";
        }

        public function ganharLuta(){
            $this->setVitorias($this->getVitorias() + 1);
        }

        public function perderLuta(){
            $this->setDerrotas($this->getDerrotas() + 1);
        }

        public function empatarLuta(){
            $this->setEmpates($this->getEmpates() + 1);
        }

        public function getNome(){
            return $this->nome;
        }

        private function setNome($nome){
            $this->nome = $nome;
        }

        private function getNacionalidade(){
            return $this->nacionalidade;
        }

        private function setNacionalidade($nacionalidade){
            $this->nacionalidade = $nacionalidade;
        }

        private function getIdade(){
            return $this->idade;
        }

        private function setIdade($idade){
            $this->idade = $idade;
        }

        private function getAltura(){
            return $this->altura;
        }

        private function setAltura($altura){
            $this->altura = $altura;
        }

        private function getPeso(){
            return $this->peso;
        }

        private function setPeso($peso){
            $this->peso = $peso;
            $this->setCategoria();
        }

        public function getCategoria(){
            return $this->categoria;
        }

        private function setCategoria(){
            if ($this->peso < 52.2) {
                $this->categoria = "Inválido";
            } elseif ($this->peso <= 70.3) {
                $this->categoria = "Leve";
            } elseif ($this->peso <= 83.9) {
                $this->categoria = "Medio";
            } elseif ($this->peso <=120.2) {
                $this->categoria = "Pesado";
            } else {
                $this->categoria = "Inválido";
            }
        }

        private function getVitorias(){
            return $this->vitorias;
        }

        private function setVitorias($vitorias){
            $this->vitorias = $vitorias;
        }

        private function getDerrotas(){
            return $this->derrotas;
        }

        private function setDerrotas($derrotas){
            $this->derrotas = $derrotas;
        }

        private function getEmpates(){
            return $this->empates;
        }

        private function setEmpates($empates){
            $this->empates = $empates;
        }

    }

?>