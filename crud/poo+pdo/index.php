<?php

    require "devuelvelibros.php";

    $id = $_GET["buscar"];

    $libro = new DevuelveLibros();

    //$array_libros = $libros->get_libros($id);




?>


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Conexión a base de datos</title>
</head>
<body>
<ul>

<?php

    foreach ($libros as $key => $libro) {
        echo "<li>". $libro['id'] . ' - ' . $libro['titulo']. ' - ' . $libro['autor']. ' - ' . $libro['descripcion']."</li>";
    }
?>



</ul>
</body>
</html>