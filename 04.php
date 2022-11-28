<?php
include 'includes/header.php';

// Constructores : funcion que se ejecuta automaticamente cuando una nueva instancia es creada en una clase. "Metodo magico"
class Empleado
{
    public $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }
}


$noe = new Empleado('Noe', 'Sola', 'Desarrolladora web', 'noemisolac@gmail.com', 006);
$karen = new Empleado('Karen', 'Perez', 'MKT', 'karen@empresa.com', 007);

echo "<pre>";
var_dump($noe);
echo "</pre><br>";

echo "<pre>";
var_dump($karen);
echo "</pre><br>";
