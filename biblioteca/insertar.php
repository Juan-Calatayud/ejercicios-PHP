<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    $titulo = $_GET["titulo"];
    $autor = $_GET["autor"];
    $descripcion = $_GET["descripcion"];

    try{

        $pdo = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "INSERT INTO libros (titulo, autor, descripcion) VALUES ('$titulo', '$autor', '$descripcion')";

        $resultado = $pdo->prepare($sql);

        $resultado->execute(array(":titulo"=>$titulo,
                                    ":autor"=>$autor,
                                    ":descripcion"=>$descripcion,));


        /*while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

            echo "<li> ID ". $registro['id']. " TITULO ".$registro['titulo']. " AUTOR ".$registro['autor']. " DESCRIPCION ".$registro['descripcion']. "</li>";

        }*/

        $resultado->closeCursor();

    }catch(Exception $e){

        die('error: '. $e->getMessage());

    }finally{

        $base = null;

    }

   //require 'index.php'


?>

</body>
</html>