<?php

$tabla = 7;
$num_min = 1;
$num_max = 10;

while($num_min <= $num_max){
 /*   echo $tabla. "*" .$num_min. "=" .$total = $tabla * $num_min;
    echo "<br>";
    $num_min = $num_min +1;*/

    $total = $tabla * $num_min++;
    echo "$tabla * $num_min = $total <br>";
};

?>