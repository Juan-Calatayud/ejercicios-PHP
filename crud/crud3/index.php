<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Indice Base de Datos</title>
</head>
<body>

<?php

    include("conexion.php"); //para incluuir la base de datos que hemos cargado en la pagina de conexion

    $conexion = $baseDatos->query("SELECT * FROM pisos"); //realizamos la consulta de los campos selecionados en la base de datos.

    $listaPisos = $conexion->fetchAll(PDO::FETCH_OBJ); //transformamos con esto el array en array de objetos



    if (isset($_POST["insertar"])) { //si has pulsado el boton cr del formulario, que seria el de insertar

        $direccion = $_POST["direccion"];
        $precio = $_POST["precio"];  //Nom, Ape y Dir son los nombres que tienen los campos en el formulario de insertar
        $descripcion = $_POST["descripcion"];

        $sql = "INSERT INTO pisos (direccion, precio, descripcion) VALUES (:direccion, :precio, :descripcion)";

        $resultado = $baseDatos->prepare($sql);

        $resultado->execute(array(":direccion"=>$direccion, ":precio"=>$precio, ":descripcion"=>$descripcion));

        header("Location:index.php"); //para que vuelva a cargar la pagina, para asi que se actualice solo
    }

?>

    <h1>Lista de Pisos</h1>

<form method="POST">
    <table>

        <tr>
            <th>ID</th>
            <th>DIRECCIÓN</th>
            <th>PRECIO</th>
            <th>DESCRIPCION</th>
        </tr>
        <?php foreach($listaPisos as $piso): ?>


        <tr>
            <td><?php echo $piso->id?></td>
            <td><?php echo $piso->direccion?></td>
            <td><?php echo $piso->precio?></td>
            <td><?php echo $piso->descripcion?></td>
            <td><a href="borrar.php?id=<?php echo $piso->id?>"><input type="button" name="borrar" value="borrar"></a></td>
            <td><a href="modificar.php?id=<?php echo $piso->id?> & direccion=<?php echo $piso->direccion?> & precio=<?php echo $piso->precio?> & descripcion=<?php echo $piso->descripcion?>"><input type="button" name="modificar" value="modificar"></a></td>
        </tr>

        <?php endforeach; ?>

        <tr>
            <td></td>
            <td><input type="text" name="direccion"></td>
            <td><input type="text" name="precio"></td>
            <td><input type="text" name="descripcion"></td>
        </tr>
        <tr>
            <td><input type="submit" name="insertar" value="insertar"></td>
        </tr>



    </table>
</form>

<footer>
    <p>Desarrollado por Juan Calatayud Palmer</p>
</footer>
</body>
</html>