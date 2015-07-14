<?php 

class Usuario{
    
    private $estado;
    private $estadoActivo;
    private $estadoInactivo;

    public function __construct(){
        $this->estadoInactivo = new UsuarioInactivo();
        $this->estadoActivo   = new UsuarioActivo();
        $this->estado         = $this->estadoInactivo;
    }

    public function setEstado(UsuarioEstado $e){
        $this->estado = $e;
    }

    public function publicarPost(){
        $this->estado->publicarPost();
    }

    public function verPosts(){
        $this->estado->verPosts();
    }

    public function getEstado(){
        if ($this->estado == $this->estadoActivo) {
            echo '</br></br>El estado ACTUAL es ACTIVO</br>';
        }

        if($this->estado == $this->estadoInactivo) {
            echo '</br></br>El estado ACTUAL es INACTIVO</br>';
        }
    }
}