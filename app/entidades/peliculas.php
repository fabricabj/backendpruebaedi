<?php   

    class Peliculas{
  
        //atributos
        public $titulo;
        public $pathImagen;
        public $descripcion;
        

      /*  public static function RetornarCantidad(){
            return Pelicula::$cantidad;
        }

        public function MostrarValor(){
            return $this->titulo;
        }*/

        public static function obtenerPeliculas()
        {
            $objAccesoDatos = AccesoDatos::obtenerInstancia();
            $consulta = $objAccesoDatos->prepararConsulta("SELECT * FROM `movies`");
            $consulta->execute();

            
            return $consulta->fetchAll(PDO::FETCH_CLASS, 'peliculas');
            
            //return $consulta->fetchAll(PDO::FETCH_CLASS, 'Peliculas');
        }

      /*  public  function CrearPeliculas()
        {
            $objAccesoDatos = AccesoDatos::obtenerInstancia();
            $consulta = $objAccesoDatos->prepararConsulta("INSERT INTO `pelicula`(`titulo`, `pathImagen`, `descripcion`) VALUES (?,?,?)");
            
            $this->autor;
            $consulta->execute();
    
            return $consulta->fetchAll(PDO::FETCH_CLASS, 'peliculas');
        }*/
        
    
    public static function CrearPeliculas($pelis)
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("INSERT INTO `movies`(`titulo`,`duracion`,`descripcion`,`puntaje`,`imagen`,`anio`,`trailer`) VALUES (?,?,?,?,?,?,?)");
    
   
    $consulta->execute([$pelis->titulo, $pelis->duracion,$pelis->descripcion, $pelis->puntaje,$pelis->imagen, $pelis->anio,$pelis->trailer]);

    return;
}
public static function obtenerPeliculasMod($pelis)
{
            $objAccesoDatos = AccesoDatos::obtenerInstancia();
            $consulta = $objAccesoDatos->prepararConsulta("SELECT * FROM `movies` WHERE id_pelicula = ?");
            $consulta->execute([$pelis->id_pelicula]);
  
            
            return $consulta->fetchAll(PDO::FETCH_CLASS, 'Peliculas');
}
 public static function EliminarPelicula($pelis)
{


    $objAccesoDatos = AccesoDatos::obtenerInstancia();
    $consulta = $objAccesoDatos->prepararConsulta("DELETE FROM `movies` WHERE id_pelicula = (?) ");
  
    $consulta->execute(array($pelis));

    //return $consulta->fetchAll(PDO::FETCH_CLASS, 'Peliculas');
    return;
}
}
?>