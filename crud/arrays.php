<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php

/*    $semana[] = "lunes";
    $semana[] = "martes";
    $semana[] = "miercoles";
    $semana[] = "jueves";



    for($i = 0; $i < count($semana); $i++){
        echo $semana[$i]."<br>";
    }

$semana[] = "viernes";

 for($i = 0; $i < count($semana); $i++){
        echo $semana[$i]."<br>";
    }*/


/*   $datos = array(
        "nombre"=>"juan",
        "apellido"=> "calatayud",
        "edad"=>"33"
        );
   $datos["pais"] = "españa";

    echo $datos["apellido"];
    echo "<br>";

    if(is_array($datos)){
        echo "es un array";
    }else{
        echo "no es un array";
    }

    echo "<br>";
    foreach ($datos as $clave => $valor) {
        echo "a $clave le corresponde $valor <br>";
    }*/
/*
$semana = array("lunes", "martes", "miercoles", "jueves");

sort($semana); //sort sirve para ordenar arrays

for ($i=0; $i < count($semana) ; $i++) {
    echo $semana[$i]. "<br>";
}*/

$alimento = array('fruta' =>array('tropical'=>'kiwi',
                                   'citricos' =>'mandarina',
                                   'otros' => 'manzana'),
                    'leche' =>array('animal'=>'vaca',
                                    'vegetal'=>'coco'),
                    'carne' =>array('vacuno'=>'lomo',
                                    'porcino'=>'pata'));

    echo $alimento['carne']['vacuno'];

    foreach ($alimento as $clave_alim => $alim) {
        echo "$clave_alim: <br>";
        while(list($clave,$valor)= each($alim)){
            echo "$clave = $valor <br>";
        }

        echo "<br>";
    }
    echo var_dump($alimento);

?>

</body>
</html>