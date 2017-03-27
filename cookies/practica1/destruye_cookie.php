<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    setcookie("idioma_seleccionado", $_GET["idioma"], time()-1);

    header("Location:ver_cookie.php");


?>

</body>
</html>