<!-- Crea una función para sorteos que admita un número
indeterminado de nombres como parámetro. Debe mostrar los
nombres y elegir uno de ellos como ganador.
Puedes usar la función rand($min_value, $max_value) que
devuelve un valor aleatorio entre el rango dado. -->


<?php

//devuelve numero aleatorio entre 1 y 20



$nombres = ['Pepa', 'Pepe', 'juan', 'paco', 'lkbaf', 'lksd'];

//devuelve numero de elementos



function sorteo($nombres){
    $num_nombres = count($nombres);
    $aleatorio = rand(1, $num_nombres);
    echo "el ganador es ". ($nombres[$aleatorio -1]);
};




sorteo($nombres);



?>