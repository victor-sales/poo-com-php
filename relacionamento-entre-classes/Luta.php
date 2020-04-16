<?php

require_once('Lutador.php');

class Luta {

    private $desafiado;
    private $desafiante;
    private $rounds;
    private $aprovada;
    
    public function __construct() {
        
    }

    public function marcarLuta($l1, $l2) {
        if ($l1->getCategoria() == $l2->getCategoria() && ($l1 != $l2)) {
            $this->setAprovada(true);
            $this->setDesafiado($l1);
            $this->setDesafiante($l2);
        } else {
            $this->setAprovada(false);
            $this->setDesafiado(null);
            $this->setDesafiante(null);
        }
    }

    public function lutar() {
        if ($this->getAprovada()) {
            $this->getDesafiado()->status();
            $this->getDesafiante()->status();
            
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0:
                    echo '<p>Empate</p>';
                    $this->getDesafiado()->empatarLuta();
                    $this->getDesafiante()->empatarLuta();
                    break;
                case 1:
                    echo '<br><p>' . $this->getDesafiado()->getNome() . ' Venceu </p>';
                    $this->getDesafiado()->ganharLuta();
                    $this->getDesafiante()->perderLuta();
                    break;
                case 2:
                    echo '<br><p>' . $this->getDesafiante()->getNome() . ' Venceu </p>';
                    $this->getDesafiado()->perderLuta();
                    $this->getDesafiante()->ganharLuta();
                    break;
            }
        } else {
            echo "Luta não pode acontecer";
        }
    }

    private function getDesafiado() {
        return $this->desafiado;
    }

    private function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    private function getDesafiante() {
        return $this->desafiante;
    }

    private function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    private function getRounds() {
        return $this->rounds;
    }

    private function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    private function getAprovada() {
        return $this->aprovada;
    }

    private function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}

?>