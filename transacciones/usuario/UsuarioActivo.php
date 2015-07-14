<?php 

class UsuarioActivo implements UsuarioEstado{
    
    public function publicarPost(){
        echo 'Se ha publicado su posts con exito.</br>';
    }

    public function verPosts(){
        echo 'El usuario ESTA VIENDO DISTINTOS POSTS.</br>';
    }
}