<?php


require "../controlador/controlador.php";

use ProyectoIntegracion\controlador\controlador;

$operacion = new controlador;

$saludo =  filter_input(INPUT_GET, "enviar_saludo", FILTER_SANITIZE_STRING);

$operacion->setSaludo($saludo);
$operacion->formatSaludo($saludo);