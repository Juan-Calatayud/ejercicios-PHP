<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    <form action="busqueda.php" method="GET" >

        <label>Buscar por ID: <input type="text" name="buscar"></label>
        <input type="submit" name="enviando" value="BUSCAR">

    </form>

    <form action="insertar.php" method="GET">

        <table>
            <tr><td>Titulo: </td><td><input type="text" name="titulo"></td></tr>
            <tr><td>Autor: </td><td><input type="text" name="autor"></td></tr>
            <tr><td>Descripción: </td><td><input type="text" name="descripcion"></td></tr>
            <tr><td colspan="2"><input type="submit" name="insertar" value="INSERTAR"></td></tr>
        </table>

    </form>

    <form action="carga.php" method="GET">

        <input type="submit" name="indice" value="VER EL INDICE">

    </form>

        <form action="borrar.php" method="GET" >

        <label>Borrar por ID: <input type="text" name="borrar"></label>
        <input type="submit" name="borrado" value="BORRAR">

    </form>




</body>
</html>