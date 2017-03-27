<?php

require 'opp02.php'

 class Camion extends Coche{ //sirve para heredar las funciones de la clase coche

        var $ruedas;
        var $color;
        var $motor;

        function Camion(){ //metodo constructor. tendrá el mismo nombre que la clase
            //al utilizar hacemos referencia a la clase coche, es como si le pusieramos delante coche
            $this ->ruedas = 8;
            $this ->color = "gris";
            $this ->motor = 2600;

        }

        function set_color($color_camion, $nombre_camion){

            $this->color = $color_camion;

            echo "el color de ". $nombre_camion. " es: ". $this->color. "<br>";
        }

        function arrancar(){
            parent::arrancar(); //primero ejecuta el código de la clase padre (clase coche)

            echo "camion arrancado";
        }

    }

?>