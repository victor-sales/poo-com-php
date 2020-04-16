<?php

interface ControladorCelular {
    
    public function ligar();
    public function desligar();
    public function bloquearTela();
    public function desbloquearTela();
    public function realizarChamada($numero);
    public function encerrarChamada();

}

?>