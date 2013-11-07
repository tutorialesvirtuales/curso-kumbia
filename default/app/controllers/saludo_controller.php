<?php

class SaludoController extends AppController{
    
    public function hola($nombre, $apellido){
        //View::template('default');
         $this->titulo = 'Probando Vista';
         $this->nombre = $nombre;
         $this->apellido = $apellido;
    } 
    
    public function bye(){
        
    }
}

