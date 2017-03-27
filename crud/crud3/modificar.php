<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>

    <h2>Modificar Pisos</h2>
<?php

    include("conexion.php");

    if(!isset($_POST['modificar'])){
        $id =$_GET["id"];
        $direccion = $_GET["direccion"];
        $precio = $_GET["precio"];
        $descripcion = $_GET["descripcion"];

    }else{

        $id =$_POST["id"];
        $direccion = $_POST["direccion"];
        $precio = $_POST["precio"];
        $descripcion = $_POST["descripcion"];

        $sql ="UPDATE pisos SET id=:id, direccion=:direccion, precio=:precio, descripcion=:descripcion  WHERE id=:id";

        $listaPisos = $baseDatos->prepare($sql);

        $listaPisos->execute(array(":id" => $id, ":direccion" => $direccion, ":precio" => $precio,
            ":descripcion" => $descripcion));

        header("Location: index.php");
    }

?>
    <form method="POST">
        <table>
            <tr>
                <td>ID</td>
                <td><input type="hidden" name="id" value="<?php echo $id ?>"></td>
            </tr>
            <tr>
                <td>DIRECCIÓN</td>
                <td><input type="text" name="direccion" value="<?php echo $direccion ?>"></td>
            </tr>
            <tr>
                <td>PRECIO</td>
                <td><input type="text" name="precio" value="<?php echo $precio ?>"></td>
            </tr>
            <tr>
                <td>DESCRIPCIÓN</td>
                <td><input type="text" name="descripcion" value="<?php echo $descripcion ?>"></td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" name="modificar" value="Modificar"></td>

            </tr>
            <tr>
                <td><a href="index.php"><input type="button" name="Indice" value="Indice"></a></td>
            </tr>
        </table>
    </form>

<footer>
    <p>Desarrollado por Juan Calatayud Palmer</p>
</footer>
</body>
</html>