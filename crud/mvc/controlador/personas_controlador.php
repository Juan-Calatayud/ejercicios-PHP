<?php

require_once("modelo/personas_modelo.php");

$persona = new Personas_modelo();

$matrizPersonas = $persona->get_personas();

require_once("vista/personas_view.php");

?>