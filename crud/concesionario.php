<?php

    class Compra_vehiculo{
        private $precio_base;
        private static $ayuda = 0;

        function __construct($gama){
            if($gama == "urbano"){
                $this->precio_base = 10000;
            }else if($gama == "compacto"){
                $this->precio_base = 20000;
            }else if($gama == "berlina"){
                $this->precio_base = 30000;
            }
        } //fin constructor


        static function descuento_gobierno(){
            if(date("m-d-y")>"02-16-17"){
                self::$ayuda = 4500;
            }

        }


        function precio_final(){
            $valor_final = $this->precio_base - self::$ayuda; //el self sirve para llamar a la variable estatica de la clase

            return $valor_final;
        }


    }


?>