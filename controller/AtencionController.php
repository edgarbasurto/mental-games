<?php
// require_once  CONTROLLER_PATH . 'Genericos.php';
require_once MODEL_PATH . 'Usuario.php';
class AtencionController
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
        $this->modelo->DetalleModulo('atencion', 'index', 'atencion', 'ficha2');
        require_once VIEW_PATH . 'Atencion/f1.php';
    }

    public function ficha2()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha2', 'atencion', 'ficha3');
        require_once VIEW_PATH . 'Atencion/f2.php';
    }
    public function ficha3()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha3', 'atencion', 'ficha4');
        require_once VIEW_PATH . 'Atencion/f3.php';
    }
    public function ficha4()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha4', 'atencion', 'ficha5');
        require_once VIEW_PATH . 'Atencion/f4.php';
    }

    public function ficha5()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha5', 'atencion', 'ficha6');
        require_once VIEW_PATH . 'Atencion/f5.php';
    }
    public function ficha6()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha6', 'atencion', 'ficha7');
        require_once VIEW_PATH . 'Atencion/f6.php';
    }
    public function ficha7()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha7', 'atencion', 'ficha8');
        require_once VIEW_PATH . 'Atencion/f7.php';
    }
    public function ficha8()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha8', 'atencion', 'ficha9');
        require_once VIEW_PATH . 'Atencion/f8.php';
    }
    public function ficha9()
    {
        $this->modelo->DetalleModulo('atencion', 'ficha9', 'home', 'contenido');
        require_once VIEW_PATH . 'Atencion/f9.php';
    }
}
