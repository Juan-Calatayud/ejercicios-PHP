<?php



$botellas = 99;

while ($botellas > 0) {
    if($botellas == 1){
        echo "<br>";
        echo" $botellas botella de cerveza en la pared <br>";
        echo  "$botellas botella de cerveza <br>";
        echo "Coge una y pásala, <br>";
        $botellas = $botellas -1;
        echo "$botellas botellas de cerveza en la pared. <br>";


    }else{

        echo "<br>";
        echo "$botellas botellas de cerveza en la pared <br>";
        echo "$botellas botellas de cerveza <br>";
        echo "coge una y pasala <br>";
        $botellas = $botellas - 1;
        echo "$botellas botellas de cerveza en la pared <br>";
    }
}
if ($botellas == 0) {
     echo "<br>";
        echo "No quedan botellas de cerveza en la pared. <br>";
        echo "No quedan botellas de cerveza. <br>";
        echo "Ir a la tienda y comprar alguna más... <br>";
}


?>