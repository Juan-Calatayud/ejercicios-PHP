<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<?php

    if(!$_COOKIE["idioma_selecionado"]){

        if($_COOKIE["idioma_selecionado"] == "cat"){

            header("Location: spanish.php");

        }else if($_COOKIE["idioma_selecionado"] == "en"){

            header("Location: english.php");
        }
    }

?>

<table width="25%" border="0" align="center">
    <tr>
        <td colspan="2" align="center"><h1>Elige Idioma</h1></td>
    </tr>
    <tr>
        <td align="center"><a href="crea_cookie.php?idioma=cat"><img src="img/cat.gif" width="90" height="60"></a></td>
        <td align="center"><a href="crea_cookie.php?idioma=en"><img src="img/ing.gif" width="90" height="60"></a></td>
    </tr>
</table>

</body>
</html>