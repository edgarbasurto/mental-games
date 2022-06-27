<?php
require_once ROOT_PATH . 'config/conexion.php';
class Usuario
{
    private $con;
    public int $IdUsuario;
    public $Nickname;
    public $NombreCompleto;
    public $Estado;
  
   

    public function __construct()
    {
        $this->con = Conexion::getConexion();
        if (!isset($_SESSION)) {
            session_start();
            
        }
    }
    public function SetValor($Valor_Usuario)
    {
        if (isset($Valor_Usuario)) {
            $this->IdUsuario = $Valor_Usuario['IdUsuario'];
            $this->Nickname = $Valor_Usuario['Nickname'];
            $this->NombreCompleto = $Valor_Usuario['NombreCompleto'];
            $this->Estado = $Valor_Usuario['Estado'];
        }
    }

    public function CrearSessionUsuario($apodo, $nombre)
    {
        if (isset($apodo, $nombre)) {
            $_SESSION['NickName'] = $apodo;
            $_SESSION['Nombre'] = $nombre;
        }
    }

    /**
     * @author edgar
     * METODO QUE ACTUALIZA EL TEMPLATE DE RESULTADOS DE
     * LA FICHA REALIZADA PARA DIRECCIONAR A LA MISMA FICHA
     * O A LA SIGUIENTE
     */
    public function DetalleModulo($m_actual, $f_actual, $m_sig, $f_sig)
    {
        $_SESSION['ModuloActual'] = $m_actual;
        $_SESSION['FichaActual'] = $f_actual;
        $_SESSION['ModuloSiguiente'] = $m_sig;
        $_SESSION['FichaSiguiente'] = $f_sig;
    }

    public function All()
    {
      return $this->sqlQuery("SELECT * FROM usuarios WHERE Activo=1");
    }
  
    public function GetById(int $Value)
    {
      return
        $this->sqlQuery("SELECT * FROM usuarios WHERE Activo=1 AND Id=" . $Value);
    }
  
    public function GetByNickName(?String $Value)
    {
      return
        $this->sqlQuery("SELECT * FROM usuarios WHERE Estado=1 AND Nickname LIKE '%" . $Value . "%'");
    }
  
    public function Delete(int $Id)
    {
      $sql = "UPDATE usuarios SET Activo=0 WHERE Id=" . $Id;
      //preparacion de la sentencia
      $stmt = $this->con->prepare($sql);
      //ejecucion de la sentencia
      if ($stmt->execute()) {
        return true;
      } else {
        return false;
      }
    }
  
    public function Insert($apodo, $nombre)
    {
      if (isset($apodo, $nombre)) {
      $sql = "INSERT INTO usuarios (Nickname, NombreCompleto, Estado, FechaCreacion, FechaActualizacion) VALUES
              ('$apodo','$nombre',1, NOW(), NOW())";
  
      //preparacion de la sentencia
      $stmt = $this->con->prepare($sql);
      //ejecucion de la sentencia
      if ($stmt->execute()) {
        return true;
      } else {
        return false;
      }
    }
    }
  
  
    public function Update(Usuario $Obj)
    {
      $sql = "UPDATE usuarios SET IdRol='$Obj->IdRol', IdServidor=$Obj->IdServidor, Email='$Obj->Email', NombreCompleto='$Obj->NombreCompleto', Genero='$Obj->Genero', FechaNacimiento ='$Obj->FechaNacimiento', UsuarioActualizacion=0, FechaActualizacion=NOW() WHERE Id=$Obj->Id";
  
  
      //preparacion de la sentencia
      $stmt = $this->con->prepare($sql);
      //ejecucion de la sentencia
      if ($stmt->execute()) {
        return true;
      } else {
        return false;
      }
    }
  
    // public function Update_pwd(Usuario $Obj)
    // {
  
    //   $newHASH = $Obj->getPassword();
  
    //   $sql = "UPDATE usuarios SET PasswordHASH='$newHASH' WHERE Id=$Obj->Id";
  
  
    //   //preparacion de la sentencia
    //   $stmt = $this->con->prepare($sql);
    //   //ejecucion de la sentencia
    //   if ($stmt->execute()) {
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }
  
    function sqlQuery(?String $sql)
    {
      //preparacion de la sentencia
      $stmt = $this->con->prepare($sql);
      //ejecucion de la sentencia
      $stmt->execute();
      //recuperacion de resultados
      $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
      // retorna datos para el controlador
      $ObjReturn = array();
      foreach ($usuarios  as $usuario) {
        $ObjUsuario = new Usuario();
        $ObjUsuario->SetValor($usuario);
        $ObjReturn[] = $ObjUsuario;
      }
      return $ObjReturn;
    }



}
