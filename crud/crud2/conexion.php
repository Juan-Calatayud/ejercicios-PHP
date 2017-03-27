<?php

    try{

        $baseDatos = new PDO('mysql:host=localhost; dbname=biblioteca','root', '');

        $baseDatos->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


        $baseDatos->exec("SET CHARACTER SET UTF8");

    }catch(Exception $e){

        die('Error '. $e->getMessage());
        echo "La línea del error es ". $e->getLine();



    }


?>