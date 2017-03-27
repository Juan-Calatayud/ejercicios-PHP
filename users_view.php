<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexión a base de datos</title>
</head>
<body>
<ul>
    <?php
    foreach ($users as $user): ?>
    <li><?= $user['name'] . ' - ' . $user['email']?></li>
    <?php endforeach ?>
</ul>
</body>
</html>