<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    include ("opp02.php");

    $mazda = new Coche();

    $pegaso = new Camion();


    $pegaso->set_color('blue', 'pegaso');



    echo " el mazda tiene ".$mazda->get_ruedas(). " ruedas <br>";
    echo " el pegaso tiene ".$pegaso->get_ruedas(). " ruedas <br>";
    echo " el mazda tiene ". $mazda->get_motor(). " centimetros cubicos <br>"


?>



</body>
</html>