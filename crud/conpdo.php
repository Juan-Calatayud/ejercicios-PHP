<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    try{

        $base = new PDO('mysql:host=localhost;dbname=pruebas;charset=utf8', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "conexion OK";

    }catch(Exception $e){

        die('error: '. $e->getMessage());

    }finally{

        $base = null;

    }


?>

</body>
</html>