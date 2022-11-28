<?php
include 'includes/header.php';

// Métodos Estaticos
class Empleado
{

    // Public, acceso en cualquier lugar (clase u objeto)
    // protected, acceso en la clase
    // public, private, protected

    protected static $nombre;
    public $apellido;
    public $departamento;
    public $email;
    public $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        self::$nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    public function obtenerNombre()
    {
        return $this->nombre;
    }
    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public static function obtenerEmpleado()
    {
        echo "Desde método estatico";
    }

    public static function getNombre()
    {
        return self::$nombre;
    }
}

// Empleado::obtenerEmpleado();


$noe = new Empleado(
    'Noe',
    'Sola',
    'Desarrolladora web',
    'noemisolac@gmail.com',
    006
);

echo $noe::getNombre();

echo "<pre>";
var_dump($noe);
echo "</pre><br>";