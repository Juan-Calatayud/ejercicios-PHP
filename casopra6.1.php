<!-- Crea una función capaz de convertir un valor de euros a dólares y
otra que haga la conversión en sentido contrario.1
El resultado debe mostrarse con dos decimales y el signo de la
moneda (en su posición correspondiente). -->

<?php

    $euro = 1.057375;
    $dolar = 0.945738267;
    $libra = 0.848069;

    function euroToDolar($num){
        global $euro;
        $result = $num*$euro;
        //echo round($result, 2). " dolares <br>";
        printf("%.2f € son $%.2f",$num, $result);
        echo "<br>";
    }

    function dolarToEuro($num){
        global $dolar;
        $result = $num*$dolar;
        //echo round($result, 2). " euros <br>";
        printf("%.2f € son $%.2f",$num,$result);
        echo "<br>";
    }

     function euroToLibra($num){
        global $libra;
        $result = $num*$libra;
        //echo round($result, 2). " dolares <br>";
        printf("%.2f € son %.2f £",$num, $result);
        echo "<br>";
    }

    function libraToEuro($num){
        $libra = 1.17915;
        $result = $num*$libra;
        //echo round($result, 2). " dolares <br>";
        printf("%.2f £ son %.2f €",$num, $result);
        echo "<br>";
    }

     function dolarToLibra($num){
        $libra =  0.80280;
        $result = $num*$libra;
        //echo round($result, 2). " dolares <br>";
        printf("$%.2f  son %.2f £",$num, $result);
        echo "<br>";
    }

    function libraToDolar($num){
        $libra = 1.2456;
        $result = $num*$libra;
        //echo round($result, 2). " dolares <br>";
        printf("%.2f £ son $ %.2f ",$num, $result);
        echo "<br>";
    }



    function conversion($num, $from, $to){
        if($from == 'EUR' && $to == 'USD'){
            echo euroToDolar($num);
        }else if($from == 'USD' && $to == 'EUR'){
            echo dolarToEuro($num);
        }else if($from == 'EUR' && $to == 'GBR'){
            echo euroToLibra($num);
        }else if($from == 'GBR' && $to == 'EUR'){
            echo libraToEuro($num);
        }else if($from == 'GBR' && $to == 'USD'){
            echo libraToDolar($num);
        }else if($from == 'USD' && $to == 'GBR'){
            echo dolarToLibra($num);
        }
    }

//printf(“%.2f euros”, ‘12.345’); // 12.34 euros

    euroToDolar(30);
    dolarToEuro(450);
    conversion(52, 'EUR', 'USD');
    conversion(52, 'USD', 'EUR');
    conversion(52, 'EUR', 'GBR');
    conversion(52, 'GBR', 'EUR');
    conversion(52, 'GBR', 'USD');
    conversion(52, 'USD', 'GBR');

?>