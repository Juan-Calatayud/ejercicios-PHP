<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    try {
        $pdo = new PDO('mysql:host=localhost;dbname=sakila;charset=UTF8','root', '');
    } catch (Exception $e) {
        die("No se pudo conectar: " . $e->getMessage());
    }

    $users = $pdo->query('SELECT*from actor')->fetchAll();

    foreach ($users as $actors => $actor) {
        echo "$actor <br>";
    }

    echo var_dump($users);


?>

</body>
</html>