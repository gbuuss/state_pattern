<?php

function __autoload($class_name){
    include $class_name . '.php';
}

class Worker{

    private $usuario;

    public function __construct(){
        $this->usuario = new Usuario();
        $this->usuario->getEstado();
        $this->usuario->publicarPost();
        $this->usuario->verPosts();

        $activo = new UsuarioActivo();
        $this->usuario->setEstado($activo);
        $this->usuario->getEstado();
        $this->usuario->publicarPost();
        $this->usuario->verPosts();

        $inactivo = new UsuarioInactivo();
        $this->usuario->setEstado($inactivo);
        $this->usuario->getEstado();
        $this->usuario->publicarPost();
        $this->usuario->verPosts();
    }
}

$worker = new Worker();