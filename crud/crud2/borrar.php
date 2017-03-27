<?php

    include("conexion.php");

    $id = $_GET['id'];

    $baseDatos->query("DELETE FROM libros WHERE id='$id'");

    header("Location:index.php"); //sirve para cuando termine la accion cargar la pagina requerida dentro del header


?>