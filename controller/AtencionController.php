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
        
        $this->modelo->DetalleModulo('atencion', 'ficha3', 'home', 'contenido');
        
        require_once VIEW_PATH . 'Atencion/f3.php';
    }
}
