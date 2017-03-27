<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php

$autenticado = false;

if(isset($_POST["enviar"])){

    try{

        $base = new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM USUARIOS_PASS WHERE USUARIOS= :login AND PASSWORD= :password";

        $resultado = $base->prepare($sql);

        $login = htmlentities(addslashes($_POST["login"]));

        $password = htmlentities(addslashes($_POST["password"]));

        $resultado->bindValue(":login", $login);

        $resultado->bindValue(":password", $password);

        $resultado->execute();

        $numero_registro = $resultado->rowCount();

        if($numero_registro != 0){

            $autenticado = true;

            if(isset($_POST["recordar"])){

                setcookie("nombre_usuario", $_POST["login"], time() + 86400);
            }

        }else{

            //header("location:login.php");

            echo "Error. Usuario o contraseña incorrectos";
        }

    }catch(Exception $e){

        die("ERROR: ". $e->getMessage());
    }
}


?>

<?php

    if($autenticado == false){

        if(!isset($_COOKIE["nombre_usuario"])){

            include ("formulario.html");
        }
    }


    if(isset($_COOKIE["nombre_usuario"])){

        echo "Hola: " . $_COOKIE["nombre_usuario"] . "!!!!";

    }else if($autenticado == true){

        echo "Hola: " . $_POST["login"] . "!!!!";
    }

?>

<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">

    <tr>
        <td><img src="images/1.jpg" width="300" height="197"></td>
        <td><img src="images/2.jpg" width="300" height="197"></td>
    </tr>
    <tr>
        <td><img src="images/3.jpg" width="300" height="197"></td>
        <td><img src="images/4.jpg" width="300" height="197"></td>
    </tr>

</table>

<?php

    if($autenticado == true || isset($_COOKIE["nombre_usuario"])){

        include("zona_registrados.html");
    }

?>

</body>
</html>