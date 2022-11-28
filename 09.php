<?php
include 'includes/header.php';

// Getters y Setters
class Empleado
{

    // Public, acceso en cualquier lugar (clase u objeto)
    // protected, acceso en la clase
    // public, private, protected

    protected $nombre;
    protected $apellido;
    protected $departamento;
    protected $email;
    protected $codigo;

    public function __construct($nombre, $apellido, $departamento, $email, $codigo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->departamento = $departamento;
        $this->email = $email;
        $this->codigo = $codigo;
    }

    /*
        Get - Para obtener un valor
        Set - Para modificar un valor
    */
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }
}

$noe = new Empleado('Noe', 'Sola', 'Desarrolladora web', 'noemisolac@gmail.com', 006);
$noe->setNombre("Un Nuevo Nombre");

$noe->setCodigo('2030');
echo $noe->getCodigo();
echo $noe->getNombre();
