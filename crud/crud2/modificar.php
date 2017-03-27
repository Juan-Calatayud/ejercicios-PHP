<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modificar</title>
</head>
<body>

    <h2>Modificar Datos</h2>
<?php

    include("conexion.php");

    if(!isset($_POST['modificar'])){
        $id =$_GET["id"];
        $titulo = $_GET["titulo"];
        $autor = $_GET["autor"];
        $descripcion = $_GET["descripcion"];

    }else{

        $id =$_POST["id"];
        $titulo = $_POST["titulo"];
        $autor = $_POST["autor"];
        $descripcion = $_POST["descripcion"];

        $sql ="UPDATE libros SET id=:id, titulo=:titulo, autor=:autor, descripcion=:descripcion  WHERE id=:id";

        $listaLibros = $baseDatos->prepare($sql);

        $listaLibros->execute(array(":id" => $id, ":titulo" => $titulo, ":autor" => $autor, ":descripcion" => $descripcion));

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
                <td>TÍTULO</td>
                <td><input type="text" name="titulo" value="<?php echo $titulo ?>"></td>
            </tr>
            <tr>
                <td>AUTOR</td>
                <td><input type="text" name="autor" value="<?php echo $autor ?>"></td>
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

</body>
</html>