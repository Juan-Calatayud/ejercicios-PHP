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

        $base = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8', 'root', '');

        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT NOMBREARTICULO, SECCION, PRECIO, PAISDEORIGEN FROM PRODUCTOS WHERE NOMBREARTICULO = :n_articulo ";

        $resultado = $base->prepare($sql);

        $resultado->execute(array(":n_articulo"=>$busqueda));

        while($registro = $resultado->fetch(PDO::FETCH_ASSOC)){

            echo "nombre articulo ". $registro['NOMBREARTICULO']. "seccion".$registro['SECCION'];

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