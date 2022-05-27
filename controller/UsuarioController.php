<?php


require_once MODEL_PATH . 'Usuario.php';
class UsuarioController
{
    private $modelo;

    public function __construct()
    {
        $this->modelo = new Usuario();
    }

    // funciones del controlador
    public function index()
    {
        if (isset($_SESSION['NickName'], $_SESSION['Nombre'])) {
            require_once(VIEW_PATH . "Home/contenido.php");
        } else {
            require_once(VIEW_PATH . "Session/login.php");
            echo var_dump($_SESSION);
        }
        
    }

    public function dash()
    {
        header('Location:index.php?c=session');
    }

    public function end()
    {
        setcookie("mySession", '0', time() - 3600, "/");
        setcookie("mySession", '0', time() + 3600, "/");
        session_unset();
        session_destroy();
        header('Location: index.php');
    }

    public function validar()
    {
        if (isset($_POST['txtapodo'], $_POST['txtnombre'])) {
            $txtapodo = htmlentities($_POST['txtapodo']);
            $txtnombre = htmlentities($_POST['txtnombre']);

            $this->modelo->CrearUsuario($txtapodo, $txtnombre);
            require_once(VIEW_PATH . "Home/contenido.php");
        }
    }
}
