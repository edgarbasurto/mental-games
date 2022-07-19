<?php
require_once MODEL_PATH . 'Usuario.php';
class MemoriaController
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

        $this->modelo->DetalleModulo('memoria', 'index', 'memoria', 'ficha39');

        require_once VIEW_PATH . 'Memoria/f38.php';
    }

    public function ficha39()
    {

        $this->modelo->DetalleModulo('memoria', 'index', 'memoria', 'ficha40');

        require_once VIEW_PATH . 'Memoria/f39.php';
    }

    public function ficha40()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha40', 'memoria', 'ficha41');

        require_once VIEW_PATH . 'Memoria/f40.php';
    }

    public function ficha41()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha40', 'memoria', 'ficha42');

        require_once VIEW_PATH . 'Memoria/f41.php';
    }

    public function ficha42()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha42', 'memoria', 'ficha43');

        require_once VIEW_PATH . 'Memoria/f42.php';
    }

    public function ficha43()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha42', 'memoria', 'ficha44');

        require_once VIEW_PATH . 'Memoria/f43.php';
    }
    public function ficha44()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha44', 'memoria', 'ficha45');

        require_once VIEW_PATH . 'Memoria/f44.php';
    }
    public function ficha45()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha44', 'memoria', 'ficha46');

        require_once VIEW_PATH . 'Memoria/f45.php';
    }
    public function ficha46()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha46', 'memoria', 'ficha47');

        require_once VIEW_PATH . 'Memoria/f46.php';
    }

    public function ficha47()
    {

        $this->modelo->DetalleModulo('memoria', 'ficha46', 'home', 'contenido');

        require_once VIEW_PATH . 'Memoria/f47.php';
    }
}
