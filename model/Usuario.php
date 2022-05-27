<?php

class Usuario
{
    public int $Id;
    public ?string $NickName;
    public ?string $NombreCompleto;
    public bool $Activo;
   

    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }
    public function SetValorDTO($Valor_UsuarioDTO)
    {
        if (isset($Valor_UsuarioDTO)) {
            $this->Id = $Valor_UsuarioDTO['Id'];
            $this->NickName = $Valor_UsuarioDTO['NickName'];
            $this->NombreCompleto = $Valor_UsuarioDTO['NombreCompleto'];
            $this->Activo = $Valor_UsuarioDTO['Activo'];
           
        }
    }

    public function CrearUsuario($apodo, $nombre)
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
}
