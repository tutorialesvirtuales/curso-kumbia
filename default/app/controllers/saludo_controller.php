<?php

class SaludoController extends AppController{
    
    public function hola($nombre, $apellido){
         $this->nombre = $nombre;
         $this->apellido = $apellido;
    }
    
    public function bye(){
        
    }
}

