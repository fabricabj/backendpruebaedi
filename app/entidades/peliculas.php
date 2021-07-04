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
            $consulta = $objAccesoDatos->prepararConsulta("SELECT imagen FROM `movies` WHERE imagen='https://m.media-amazon.com/images/M/MV5BNjQ3NWNlNmQtMTE5ZS00MDdmLTlkZjUtZTBlM2UxMGFiMTU3XkEyXkFqcGdeQXVyNjUwNzk3NDc@._V1_UX182_CR0,0,182,268_AL_.jpg'");
            $consulta->execute();
            $resultado_peliculas = $consulta->fetchAll();
            foreach($resultado_peliculas as $row){
                    echo $row['imagen'];
            }
            
            //return $consulta->fetchAll(PDO::FETCH_CLASS, 'peliculas');
            
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
        
    }

?>