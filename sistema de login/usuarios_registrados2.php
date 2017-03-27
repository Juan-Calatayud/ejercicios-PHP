<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    session_start();

    if( !isset($_SESSION["usuario"])){

        header("location:login.php");
    }

?>

<h1>bienvenidos usuarios</h1>

<?php

    echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";

?>

<p><a href="cierre.php">Cierra sesión</a></p>


<p>esto es información solo para usuarios</p>

<p><a href="usuarios_registrados1.php">volver</a></p>
</body>
</html>