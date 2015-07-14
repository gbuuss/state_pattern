<?php 

class Activa implements Estado{

    public function ejecutarAccion(){
        echo 'Estado Activo: Atento</br>';
    }

    public function getEstadoString(){
        return 'Activa';
    }
}