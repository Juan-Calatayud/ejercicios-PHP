<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

    require 'camion.php';
    require 'coche.php';

    $mazda = new Coche;

    echo $mazda->ruedas;


    ?>
</body>
</html>