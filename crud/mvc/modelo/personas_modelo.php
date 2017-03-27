<?php

class Personas_modelo{


    private $db;

    private $persona;

    public function __construct(){

        require_once("modelo/conectar.php");

        $this->db = Conectar::conexion();

        $this->persona = array();
    }

    public function get_personas(){

        $consulta = $this->db->query("SELECT * FROM datos_usuarios");

        while($filas = $consulta->fetch(PDO::FETCH_ASSOC)){

            $this->persona[] = $filas;
        }

        return $this->persona;

    }




}



?>