<?php 

class UsuarioInactivo implements UsuarioEstado{
    
    public function publicarPost(){
        echo 'El usuario se encuentra INACTIVO por lo cual no puede publicar posts.</br>';
    }

    public function verPosts(){
        echo 'Aunque el usuario este INACTIVO puede ver distintos posts.</br>';
    }
}