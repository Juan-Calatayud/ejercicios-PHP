<?php


// el metodo setter sirve para modificar las propiedades de un objeto
// el metodo getter sirve para ver las propiedades de un objeto

    class Coche{

        protected $ruedas;
        var $color;
        protected $motor;

        function __construct(){ //metodo constructor. tendrá el mismo nombre que la clase
            //al utilizar hacemos referencia a la clase coche, es como si le pusieramos delante coche
            $this ->ruedas = 4;
            $this ->color = "";
            $this ->motor = 1600;

        }


        function get_motor(){
            return $this->motor;
        }

        function get_ruedas(){ //nos devuelve el estado de una propiedad

            return $this->ruedas;
        }

        function arrancar(){

            echo "estoy arrancando <br>";
        }

        function girar(){

            echo "estoy girando <br>";
        }

        function frenar(){

            echo "estoy frenando <br>";

        }

        function set_color($color_coche, $nombre_coche){

            $this->color = $color_coche;

            echo "el color de ". $nombre_coche. " es: ". $this->color. "<br>";
        }


    }


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
