<?php

    require "conexion.php";

    class DevuelveLibros extends Conexion{

        public function __construct(){

            parent::__construct();
        }

        function get_libros($dato){

            $sql = "SELECT * FROM LIBROS WHERE id='". $dato."'";

            $sentencia = $this->conexion_db->prepare($sql);

            $sentencia->execute(array());

            $resultado = $sentencia->fetch_all(PDO::FETCH_ASSOC);

            $sentencia->closeCursor();

            return $resultado;

            $this->conexion_db = null;


            /*$resultado = $this->conexion_db->query('SELECT * FROM LIBROS WHERE id="'. $dato.'"');

            $productos = $resultado->fetch_all(MYSQLI_ASSOC);

            return $resultado;*/
        }



    }


?>