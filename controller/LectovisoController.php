<?php
require_once MODEL_PATH . 'Usuario.php';
class LectovisoController
{

    private $modelo;
    public function __construct()
    {
        // getSessionActual();
        $this->modelo = new Usuario();
    }

    // funciones del controlador
    public function index()
    {

        $this->modelo->DetalleModulo('Lectoviso', 'index', 'Lectoviso', 'ficha61');

        require_once VIEW_PATH . 'Lectoviso/f60.php';
    }

    public function ficha61()
    {

        $this->modelo->DetalleModulo('Lectoviso', 'ficha61', 'Lectoviso', 'ficha62');

        require_once VIEW_PATH . 'Lectoviso/f61.php';
    }

    public function ficha62()
    {

        $this->modelo->DetalleModulo('Lectoviso', 'ficha62', 'Lectoviso', 'ficha63');

        require_once VIEW_PATH . 'Lectoviso/f62.php';
    }

    public function ficha63()
    {

        $this->modelo->DetalleModulo('Lectoviso', 'ficha63', 'Lectoviso', 'ficha64');

        require_once VIEW_PATH . 'Lectoviso/f63.php';
    }

    
    public function ficha64()
    {

        $this->modelo->DetalleModulo('Lectoviso', 'ficha64', 'home', 'contenido');

        require_once VIEW_PATH . 'Lectoviso/f64.php';
    }
}
