<?php
/**
 * Gestión básica de datos
 * 
 * Las variables almacenan valores que pueden ser utilizados para procesos
 * posteriores, dependiendo del tipo de dato que tomen.
 */

$nombre = "Erik Daniel";
$apellidos = "Ramirez Bernal";
$nombre_completo = $nombre." ".$apellidos;
echo "Hola ".$nombre_completo;

$edad = 16;
echo "Hola ".$nombre." este año cumplirás ".++$edad;

$antiguedad = 11;
$antiguedad = $antiguedad + 5;
$antiguedad += 5;
// += -= *= %=

// Expansión de variables
echo "Hola $nombre tienes $edad de edad."; 