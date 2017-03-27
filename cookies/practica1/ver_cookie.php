<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

    if(!$_COOKIE["idioma_selecionado"]){

        header("Location: pag1.php");

    }else if($_COOKIE["idioma_selecionado"] == "cat"){

        header("Location: spanish.php");

    }else if($_COOKIE["idioma_selecionado"] == "en"){

        header("Location: english.php");
    }


?>
</body>
</html>