<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indice Base de Datos</title>
</head>
<body>

<?php

    include("conexion.php"); //para incluuir la base de datos que hemos cargado en la pagina de conexion

    $conexion = $baseDatos->query("SELECT * FROM libros"); //realizamos la consulta de los campos selecionados en la base de datos.

    $listaLibros = $conexion->fetchAll(PDO::FETCH_OBJ); //transformamos con esto el array en array de objetos




?>

    <h1>Tabla de libros</h1>

<form method="GET">
    <table>

        <tr>
            <th>ID</th>
            <th>TÍTULO</th>
            <th>AUTOR</th>
            <th>DESCRIPCION</th>
        </tr>
        <?php foreach($listaLibros as $libro): ?>


        <tr>
            <td><?php echo $libro->id?></td>
            <td><?php echo $libro->titulo?></td>
            <td><?php echo $libro->autor?></td>
            <td><?php echo $libro->descripcion?></td>
            <td><a href="borrar.php?id=<?php echo $libro->id?>"><input type="button" name="borrar" value="borrar"></a></td>
            <td><a href="modificar.php?id=<?php echo $libro->id?> & titulo=<?php echo $libro->titulo?> & autor=<?php echo $libro->autor?> & descripcion=<?php echo $libro->descripcion?>"><input type="button" name="modificar" value="modificar"></a></td>
        </tr>

        <?php endforeach; ?>

    </table>
</form>
</body>
</html>