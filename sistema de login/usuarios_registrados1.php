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

    echo "Hola: " . $_SESSION["usuario"] . "<br><br>";

?>



<p>esto es información solo para usuarios</p>

<p><a href="usuarios_registrados2.php">usuarios registrados 2</a></p>
<p><a href="usuarios_registrados3.php">usuarios registrados 3</a></p>
<p><a href="usuarios_registrados4.php">usuarios registrados 4</a></p>
<p><a href="cierre.php">Cierra sesión</a></p>

</body>
</html>