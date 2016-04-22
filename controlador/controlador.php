<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controlador
 *
 * @author eduardo
 */

$saludo = filter_input(INPUT_GET, "enviar_saludo", FILTER_SANITIZE_STRING);

namespace ProyectoIntegracion\controlador;

class controlador {

protected $saludo = "";
    
    public function setSaludo($saludo){
        
        $this->saludo = $saludo;
       
        
    }
    
    public function formatSaludo($saludo){
        
        return $saludo;
    }
    
    
}
require '../vista/vistaSaludo.php';
