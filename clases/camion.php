<?php


class Camion
{

    public $capacidad;
    private $cilindrada;
    private $peso;
    private $ruedas;
    public $mercancia;

    function __construct(){
        $this->ruedas = 8;
        $this->cilindrada = 2900;
        $this->mercancia = $mercancia;
    }

    function mercancia($mercancia){
        echo "la mercancia que transporta el camion es ".$mercancia;
    }
}