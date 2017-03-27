<?php

$day = 's';
$time = 15.00;
/*$mensajes = [
    true => "abierto, pasa",
    false => "lo sentimos, cerrado"
];
$isOpen = false;*/

$open = [
    'l' => [[10.00, 14.00], [16.00, 20.00]],
    'm' => [[10.00, 14.00], [16.00, 20.00]],
    'x' => [[10.00, 14.00], [16.00, 20.00]],
    'j' => [[10.00, 14.00], [16.00, 20.00]],
    'v' => [[10.00, 14.00], [16.00, 20.00]],
    's' => [[10.00, 20.00]],
    'd' => []
];

$mensaje = "cerrado, lo siento";
foreach ($open[$day] as $openRange) {
    if (($time >= $openRange[0]) && ($time <= $openRange[1])){
        $mensaje = "abierto, pasa y paga";
    }
}
echo $mensaje;

?>