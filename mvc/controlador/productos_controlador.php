<?php

require_once("modelo/productos_modelo.php");

$producto = new Productos_modelo();

$matrizProductos = $producto->get_productos();

require_once("vista/productos_view.php");

?>