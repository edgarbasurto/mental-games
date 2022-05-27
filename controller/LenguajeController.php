<?php
require_once MODEL_PATH . 'Usuario.php';
class LenguajeController
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

        $this->modelo->DetalleModulo('lenguaje', 'index', 'lenguaje', 'ficha28');
        
        require_once VIEW_PATH . 'Lenguaje/f27.php';
    }

    public function ficha28()
    {
      
        $this->modelo->DetalleModulo('lenguaje', 'ficha28', 'lenguaje', 'ficha29');
       
        require_once VIEW_PATH . 'Lenguaje/f28.php';
    }

    public function ficha29()
    {
       
        $this->modelo->DetalleModulo('lenguaje', 'ficha29', 'lenguaje', 'ficha30');
        
        require_once VIEW_PATH . 'Lenguaje/f29.php';
    }

    public function ficha30()
    {
       
        $this->modelo->DetalleModulo('lenguaje', 'ficha30', 'lenguaje', 'ficha31');
        
        require_once VIEW_PATH . 'Lenguaje/f30.php';
    }

    public function ficha31()
    {
       
        $this->modelo->DetalleModulo('lenguaje', 'ficha31', 'lenguaje', 'ficha32');
        
        require_once VIEW_PATH . 'Lenguaje/f31.php';
    }

    public function ficha32()
    {
       
        $this->modelo->DetalleModulo('lenguaje', 'ficha32', 'home', 'contenido');
        
        require_once VIEW_PATH . 'Lenguaje/f32.php';
    }

   
}
