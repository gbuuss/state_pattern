<?php 

class Alarma{

    private $estado;

    public function setEstado(Estado $e){
        $this->estado = $e;
        echo 'Se cambio el estado a: ' . $this->estado->getEstadoString() . '</br>';
    }

    public function ejecutarAccion(){
        $this->estado->ejecutarAccion();
    }
}