<?php   

    class Pelicula{
  
        //atributos
        public $titulo;
        public $pathImagen;
        public $descripcion
        

        public static function RetornarCantidad(){
            return Pelicula::$cantidad;
        }

        public function MostrarValor(){
            return $this->titulo;
        }

        public static function obtenerTodos()
        {
            $objAccesoDatos = AccesoDatos::obtenerInstancia();
            $consulta = $objAccesoDatos->prepararConsulta("SELECT * FROM peliculas");
            $consulta->execute();
    
            return $consulta->fetchAll(PDO::FETCH_CLASS, 'peliculas');
        }

        public  function CrearUsuario()
        {
            $objAccesoDatos = AccesoDatos::obtenerInstancia();
            $consulta = $objAccesoDatos->prepararConsulta("INSERT INTO `pelicula`(`titulo`, `pathImagen`, `descripcion`) VALUES (?,?,?)");
            
            $this->autor;
            $consulta->execute();
    
            return $consulta->fetchAll(PDO::FETCH_CLASS, 'Provincia');
        }
        
    }

?>