<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=biblioteca;charset=utf8','root', '');
        $stmt = $pdo->prepare('SELECT * from libros');
        $stmt->execute();
        $biblioteca = $stmt->fetchAll();
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        print "¡Error, no se ha podido cargar!: " . $e->getMessage() . "<br/>";
        die();
    }

    include 'index.php' // Mostramos el HTML con el bucle con los libros
?>