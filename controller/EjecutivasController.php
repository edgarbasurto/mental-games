<?php
require_once MODEL_PATH . 'Usuario.php';
class EjecutivasController
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

        $this->modelo->DetalleModulo('ejecutivas', 'index', 'ejecutivas', 'ficha17');
        
        require_once VIEW_PATH . 'Ejecutivas/f16.php';
    }

    public function ficha17()
    {
      
        $this->modelo->DetalleModulo('ejecutivas', 'ficha17', 'ejecutivas', 'ficha18');
       
        require_once VIEW_PATH . 'Ejecutivas/f17.php';
    }

    public function ficha18()
    {
       
        $this->modelo->DetalleModulo('ejecutivas', 'ficha18', 'ejecutivas', 'ficha19');
        
        require_once VIEW_PATH . 'Ejecutivas/f18.php';
    }

    public function ficha19()
    {
       
        $this->modelo->DetalleModulo('ejecutivas', 'ficha19', 'ejecutivas', 'ficha20');
        
        require_once VIEW_PATH . 'Ejecutivas/f19.php';
    }

    public function ficha20()
    {
       
        $this->modelo->DetalleModulo('ejecutivas', 'ficha20', 'ejecutivas', 'ficha21');
        
        require_once VIEW_PATH . 'Ejecutivas/f20.php';
    }

    public function ficha21()
    {
       
        $this->modelo->DetalleModulo('ejecutivas', 'ficha21', 'ejecutivas', 'ficha22');
        
        require_once VIEW_PATH . 'Ejecutivas/f21.php';
    }

    public function ficha22()
    {
       
        $this->modelo->DetalleModulo('ejecutivas', 'ficha22', 'ejecutivas', 'ficha23');
        
        require_once VIEW_PATH . 'Ejecutivas/f22.php';
    }

    public function ficha23()
    {
       
        $this->modelo->DetalleModulo('ejecutivas', 'ficha23', 'home', 'contenido');
        
        require_once VIEW_PATH . 'Ejecutivas/f23.php';
    }
}
