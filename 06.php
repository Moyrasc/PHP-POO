<?php
include 'includes/header.php';

// Constructor property Promotion
class Empleado
{
    public function __construct(
        public $nombre,
        public $apellido,
        public $departamento,
        public $email,
        public $codigo,
    ) {
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
