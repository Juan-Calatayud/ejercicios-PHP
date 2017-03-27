<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style type="text/css">
        td{
            border:1px dotted #FF0000;
        }
    </style>
</head>
<body>

<table>

    <tr><td>NOMBRE DEL ARTICULO</td></tr>




<?php

    foreach($matrizProductos as $registro){

        echo "<tr><td>". $registro["NOMBREARTICULO"]. "</tr></td>";
    }


?>
</table>
</body>
</html>