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
            echo "<div class='row'>";
            /*$resultado_peliculas = $consulta->fetchAll();
            foreach($resultado_peliculas as $row){*/
            while($row = $consulta->fetch(PDO::FETCH_BOTH)){
                    echo "<img  src='".$row['imagen']."'><p>".$row['titulo']."</p>";
     
            }
            echo "</div>";
            
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