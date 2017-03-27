<!-- a. Crea una función isPrime() que reciba un número entero y
devuelva true si el número es primo o false si no lo es.
Para poder comprobar facilmente el resultado por pantalla crea
una segunda función llamada tellIfPrime que ejecute la función
anterior e imprima una cadena diciendo si esl número es primo
o no.
Al final de tu código prueba con algunos número primos y no
primos.
b. Cuando lo tengas, comprueba si tu función sirve para número
primos altos como 983, 104729, 2147483647. Si la longitud del
número es un problema piensa qué puede estar ocurriendo y
cómo solucionarlo. -->

<?php

/*function esPrimo($x){
    for ($i = 1; $i <= ($x/2); $i++) {
        if ($x % $i == 0) {
            echo true;
        }else{
            echo false;
        }
    }
};

echo esPrimo(983);*/

function isPrime($num){
    $cont = 0;
    for($i = 2; $i < $num/2; $i++){
        $cont++;
        if($num % $i == 0){
            echo "las operaciones que ha realizado para saber si es primo son  $cont  ";
            return false;
        }
    }
    echo "las operaciones que ha realizado para saber si es primo son  $cont  ";
    return true;
}

function tellIfPrime($num){
    if(isPrime($num) == true){
        echo "el $num es primo";
    }else{
        echo "el $num no es primo";
    }
}

tellIfPrime(983);
?>