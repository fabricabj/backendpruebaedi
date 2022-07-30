<?php
class Usuario
{
    public $nombre;
    public $contrasenia;

    public static function crearUsuario($usuario)
    {
        $objAccesoDatos = AccesoDatos::obtenerInstancia();
        $consulta = $objAccesoDatos->prepararConsulta(
            'INSERT INTO `usuarios`(`nombre`, `contrasenia`) VALUES (?,?)'
        );

        $consulta->execute([$usuario->nombre, $usuario->contrasenia]);

        return;
    }
    public static function retornarUsuario($usuario)
    {
   
        $objAccesoDatos = AccesoDatos::obtenerInstancia();
        $consulta = $objAccesoDatos->prepararConsulta(
            'SELECT * FROM `usuarios` WHERE nombre= (?) AND contrasenia= (?)'
        );

        $consulta->execute([$usuario->nombre, $usuario->contrasenia]);
        $filas =$consulta->fetchColumn();
            if($filas>0){
                echo 'Bienvenido';
            }else{
                echo 'Usuario o contraseña incorrecto';
            }

        return;
    }
    
    public static function ValidarUsuario($usuario){
        $objAccesoDatos = AccesoDatos::obtenerInstancia();
        $consulta = $objAccesoDatos->prepararConsulta(
            'SELECT * FROM `usuarios` WHERE nombre= (?)'
            );
        $consulta->execute([$usuario->nombre]);
        $consulta->store_result();
            if($consulta->num_rows>0){
                echo 'Usuario existente';
            }else{
                echo 'Usuario valido';
            }

        return;
    }
}

?>
