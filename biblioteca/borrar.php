<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    $borrar = $_GET["borrar"];

    try{

        $pdo = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8', 'root', '');

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $sql = "DELETE FROM libros WHERE  id = :id";
        $resultado = $pdo->prepare($sql);

        $resultado->execute(array(":id"=>$borrar));


        $affected_rows = $resultado->rowCount();



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