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
 * 
 */

require "../vendor/autoload.php";


$saludoRecibido = $_GET['saludo'];



use ProyectoIntegracion\modelo\saludar;

$objetoSaludo = new saludar;
$objetoSaludo->setSaludo($saludoRecibido);

$saludo = $objetoSaludo->formatSaludo();

require '../vista/vistaSaludo.php';

