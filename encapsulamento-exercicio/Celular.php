<?php

require_once('ControladorCelular.php');

class Celular implements ControladorCelular {

    private $marca;
    private $modelo;
    private $cor;
    private $memRam;
    private $memInterna;
    private $ligado;
    private $bloqueado;
    private $ocupado;

    public function __construct($marca, $modelo, $cor, $memRam, $memInterna) {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setCor($cor);
        $this->setMemRam($memRam);
        $this->setMemInterna($memInterna);
        $this->setLigado(false);
        $this->setBloqueado(false);
        $this->setOcupado(true);
    }

    private function getMarca(){
        return $this->marca;
    }
    private function setMarca($marca){
        $this->marca = $marca;
    }
    private function getModelo(){
        return $this->modelo;
    }
    private function setModelo($modelo){
        $this->modelo = $modelo;
    }
    private function getCor(){
        return $this->cor;
    }
    private function setCor($cor){
        $this->cor = $cor;
    }
    private function getMemRam(){
        return $this->memRam;
    }
    private function setMemRam($memRam){
        $this->memRam = $memRam;
    }
    private function getMemInterna(){
        return $this->memInterna;
    }
    private function setMemInterna($memInterna){
        $this->memInterna = $memInterna;
    }
    private function getLigado(){
        return $this->ligado;
    }
    private function setLigado($ligado){
        $this->ligado = $ligado;
    }
    private function getBloqueado(){
        return $this->bloqueado;
    }
    private function setBloqueado($bloqueado){
        $this->bloqueado = $bloqueado;
    }
    private function getOcupado(){
        return $this->ocupado;
    }
    private function setOcupado($ocupado){
        $this->ocupado = $ocupado;
    }

    public function ligar(){
        if (!$this->getLigado()) {
            $this->setLigado(true);
            $this->setOcupado(false);
        }
    }
    public function desligar(){
        if ($this->getLigado()) {
            $this->setLigado(false);
        }
    }
    public function bloquearTela(){
        if ($this->getLigado() && !$this->getBloqueado()) {
            $this->setBloqueado(true);
        }
    }
    public function desbloquearTela(){
        if ($this->getLigado() && $this->getBloqueado()) {
            $this->setBloqueado(false);
        }
    }
    public function realizarChamada($numero){
        if ($numero != "" && !$this->getOcupado()) {
            echo "<br> Realizando chamada...";
            $this->setOcupado(true);
        }
    }
    public function encerrarChamada(){
        if ($this->getOcupado()) {
            echo "<br> Encerrando chamada";
            $this->setOcupado(false);
        }
    }

}

?>