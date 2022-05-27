<?php
// require_once  CONTROLLER_PATH . 'Genericos.php';
class HomeController
{

    public function __construct()
    {
        // getSessionActual();
    }

    // funciones del controlador
    public function index()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
        require_once VIEW_PATH . 'Home/home.php';
    }

    public function contenido(){
        if (!isset($_SESSION)) {
            session_start();
        }
        require_once VIEW_PATH . 'Home/contenido.php';
    }
}
