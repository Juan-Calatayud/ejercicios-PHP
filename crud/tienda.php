<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    require "concesionario.php";

    $compra_antonio = new Compra_vehiculo("compacto");

    Compra_vehiculo::descuento_gobierno();

    echo $compra_antonio->precio_final();


?>

</body>
</html>