<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    $busqueda = $_GET["buscar"];

    try{

        $pdo = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM libros WHERE id=:id";

        $resultado = $pdo->prepare($sql);

        $resultado->execute(array(":id"=>$busqueda));


        while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

            echo "<li> ID ". $registro['id']. " TITULO ".$registro['titulo']. " AUTOR ".$registro['autor']. " DESCRIPCION ".$registro['descripcion']. "</li>";

        }

        $resultado->closeCursor();

    }catch(Exception $e){

        die('error: '. $e->getMessage());

    }finally{

        $base = null;

    }


?>

</body>
</html>