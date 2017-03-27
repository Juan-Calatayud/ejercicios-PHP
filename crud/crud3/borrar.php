<?php

    include("conexion.php");

    $id = $_GET['id'];

    $baseDatos->query("DELETE FROM pisoss WHERE id='$id'");

    header("Location:index.php"); //sirve para cuando termine la accion cargar la pagina requerida dentro del header


?>