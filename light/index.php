<?php

function __autoload($class_name){
    include $class_name . '.php';
}

class Client{

    private $context;

    public function __construct(){
        $this->context = new Context();
    }

    public function changeStateOn(){
        $this->context->turnOnLight();
    }

    public function changeStateOff(){
        $this->context->turnOffLight();
    }
}

$worker = new Client();

$worker->changeStateOn();