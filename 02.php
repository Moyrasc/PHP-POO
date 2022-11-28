<?php
include 'includes/header.php';

// Instanciar una clase, no puedo tener 2 clases con el mismo nombre
class Empleado
{
}
// $empleado --> objeto creado -- new Empleado --> instancia de la clase. Si puedo tener multiples instancias de una misma clase
$empleado = new Empleado;
$empleado2 = new Empleado;
$empleado3 = new Empleado;

// echo pre lo uso para formatear el objeto y que sea mas visual
echo "<pre>";
var_dump($empleado);
echo "</pre>";

echo "<pre>";
var_dump($empleado2);
echo "</pre>";

echo "<pre>";
var_dump($empleado3);
echo "</pre>";
