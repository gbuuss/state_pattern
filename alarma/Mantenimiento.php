<?php 

class Mantenimiento implements Estado{

    public function ejecutarAccion(){
        echo 'Estado en mantenimiento: No atento</br>';
    }

    public function getEstadoString(){
        return 'Mantenimiento';
    }
}