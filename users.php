<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=pdo;charset=utf8','root', '');
        $stmt = $pdo->prepare('SELECT * from users');
        $stmt->execute();
        $users = $stmt->fetchAll();
        $pdo = null;
        $stmt = null;
    } catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    include 'users_view.php' // Mostramos el HTML con el bucle
?>