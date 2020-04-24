<?php

require_once('Video.php');
require_once('Gafanhoto.php');

class Visualizacao {

    private $espectador;
    private $filme;

    public function __construct($espectador, $filme) {
        $this->setEspectador($espectador);
        $this->setFilme($filme);
        $this->getFilme()->setViews($this->getFilme()->getViews() + 1);
        $this->getEspectador()->setTotAssistido($this->getEspectador()->getTotAssistido() + 1);
    }

    public function avaliar() {
        $this->getFilme()->setAvaliacao(5);
    }

    public function avaliarNota($nota) {
        $this->getFilme()->setAvaliacao($nota);
    }

    public function avaliarPorc($porc) {
        $nota = 0;
        if ($porc <= 20) {
            $nota = 2;
        } elseif ($porc <= 50) {
            $nota = 5;
        } elseif ($porc <= 80) {
            $nota = 8;
        } else {
            $nota = 10;
        }
        $this->getFilme()->setAvaliacao($nota);
    }

    public function getEspectador(){
        return $this->espectador;
    }
    public function setEspectador($espectador){
        $this->espectador = $espectador;
    }
    public function getFilme(){
        return $this->filme;
    }
    public function setFilme($filme){
        $this->filme = $filme;
    }
}

?>