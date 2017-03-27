<?php


class Coche
{

    private $ruedas;
    private $cilindrada;
    private $maletero;
    public $color;
    private $capacidad;
    public $marca;

    function __construct($color, $marca){
        $this->ruedas = 4;
        $this->cilindrada = 1900;
        $this->capacidad = 4;
        $this->maletero = [];
        $this->color = $color;
        $this->marca = $marca;
    }


    }

}

?>