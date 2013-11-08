<?php

class SaludoController extends AppController{
    
    public function hola($nombre=FALSE, $apellido=FALSE){
        //View::template('default');
         $this->titulo = 'Crear Usuario';
         $this->subtitulo = 'Cree un usuario facilmente';
         $this->nombre = $nombre;
         $this->apellido = $apellido;
    } 
    
    public function bye(){
        
    }
}

