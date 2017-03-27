<?php

$open = ['from' => 10.00, 'to' => 20.00];

$t = 10.00;

if($t < $open['from'] or $t > $open['to']){
    echo "La tienda esta cerrada";
}else{
    echo "la tienda esta abierta";
};




?>