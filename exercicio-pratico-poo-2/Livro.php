<?php

require_once('Publicacao.php');
require_once('Pessoa.php');

class Livro implements Publicacao {

    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function __construct($titulo, $autor, $totPaginas, $leitor){
        $this->setTitulo($titulo);
        $this->setAutor($autor);
        $this->setTotPaginas($totPaginas);
        $this->setPagAtual(0);
        $this->setAberto(false);
        $this->setLeitor($leitor);
    }

    public function detalhes(){
        echo "<br>Livro: " . $this->getTitulo() . " escrito por " . $this->getAutor() . ", está sendo lido por " . $this->getLeitor()->getNome();
        echo "<br>Página atual: " . $this->getPagAtual();
    }

    public function abrir(){
        if (!$this->getAberto()) {
            $this->setAberto(true);
        }
    }
    public function fechar(){
        if ($this->getAberto()) {
            $this->setAberto(false);
        }
    }
    public function folhear($pagina){
        if ($this->getTotPaginas() < $pagina) {
            echo '<br>Página inválida';
            $this->setPagAtual(0);
        } elseif ($pagina < 0) {
            $this->setPagAtual(0);
        } else {
            $this->setPagAtual($pagina);
        }
    }
    public function avançarPag(){
        if ($this->getAberto()) {
            $this->setPagAtual($this->getPagAtual() + 1);
            if ($this->getPagAtual() > $this->getTotPaginas()) {
                echo '<br>Você finalizou o livro.';
                $this->setPagAtual(0);
            }
        } else {
            echo "<br>O livro está fechado";
        }
    }
    public function voltarPag(){
        if ($this->getAberto()) {
            $this->setPagAtual($this->getPagAtual() - 1);
            if ($this->getPagAtual() < 0) {
                $this->setPagAtual(0);
            }
        } else {
            echo "<br>O livro está fechado";
        }
    }


    public function getTitulo(){
        return $this->titulo;
    }

    private function setTitulo($titulo){
        $this->titulo = $titulo;
    }

    public function getAutor(){
        return $this->autor;
    }

    private function setAutor($autor){
        $this->autor = $autor;
    }
    
    public function getTotPaginas(){
        return $this->totPaginas;
    }

    private function setTotPaginas($totPaginas){
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual(){
        return $this->pagAtual;
    }

    private function setPagAtual($pagAtual){
        $this->pagAtual = $pagAtual;
    }

    public function getAberto(){
        return $this->aberto;
    }

    private function setAberto($aberto){
        $this->aberto = $aberto;
    }

    public function getLeitor(){
        return $this->leitor;
    }

    private function setLeitor($leitor){
        $this->leitor = $leitor;
    }

}

?>