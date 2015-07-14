<?php

function __autoload($class_name){
    include $class_name . '.php';
}

class Client{

    private $alarma;

    public function __construct(){
        $this->alarma = new Alarma();
    }

    public function probarAlarmaActiva(){
        $estadoActiva = new Activa();
        $this->alarma->setEstado($estadoActiva);
        $this->alarma->ejecutarAccion();
    }

    public function probarAlarmaMantenimiento(){
        $estadoMantenimiento = new Mantenimiento();
        $this->alarma->setEstado($estadoMantenimiento);
        $this->alarma->ejecutarAccion();
    }
}

$worker = new Client();
$worker->probarAlarmaActiva();
$worker->probarAlarmaMantenimiento();
