<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1> INTRODUCE TUS DATOS</h1>

<form action="comprueba_login.php" method="POST">
    <table>
        <tr>
            <td class="izq"> Login: </td><td class="der"><input type="text" name="login"></td>
        </tr>
        <tr>
            <td class="izq"> Password: </td><td class="der"><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="enviar" value="LOGIN"></td>
        </tr>

    </table>

</form>

</body>
</html>