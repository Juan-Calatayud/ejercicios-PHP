<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>pregunta 3.1</title>
</head>
<body>

<?php

    $people = [
        ['name' => 'Juan', 'age' => 15],
        ['name' => 'Paco', 'age' => 16]
    ];


/*    if($people[0]['age'] > $people[1]['age']){
        $total1 = $people[0]['age'] - $people[1]['age'];
        echo $total1;
    }else if($people['0']['age'] < $people['1']['age']){
        $total2 = $people['0']['age'] + $people['1']['age'];
        echo "Juan es más joven que paco con diferencia de  " ($total2)/4;
    }else if($people['0']['age'] == $people['1']['age']){
        $total3 = ($people['0']['age'] = $people['1']['age']);
        echo total3;
    };*/

    //este ejemplo solo funciona con php7
/*    $diff = $people[0]['age'] - $people[1]['age'];
    $diff = ($diff < 0) ? $diff=$diff*-1: $diff;
    $pos = ($people[0]['age'] <=> $people[1]['age']);

    echo "la diferencia es de $diff ";

    switch ($pos) {
        case '-1':
            echo "{$people[0]['name']} es mayor que {$people[1]['name']} ";
            break;
        case '1':
            echo "{$people[0]['name']} es mayor que {$people[1]['name']} ";
            break;

        case '0':
            echo "tienen la misma edad";
            break;
    };*/

    $people = [
    ['name' => 'Juan', 'age' => 18],
    ['name' => 'Paco', 'age' => 16]
];
// Spaceship operator + switch
$diff = $people[0]['age']- $people[1]['age'];
// si negativo: *-1 para hallar el absoluto
if ($diff < 0){ $diff = $diff * -1; }
$pos = ($people[0]['age'] <=> $people[1]['age']);
echo "La diferencia es de $diff. ";
switch ($pos) {
    case '-1':
        echo "{$people[0]['name']} es menor que {$people[1]['name']}.";
        break;
    case '1':
        echo "{$people[0]['name']} es mayor que {$people[1]['name']}.";
        break;
    case '0':
        echo "Tienen la misma edad.";
        break;
}
// Spaceship operator + Array de mensajes
$diff = $people[0]['age']- $people[1]['age'];
// si negativo: *-1 para hallar el absoluto
$diff = $diff < 0 ? $diff * -1 : $diff;
$pos = ($people[0]['age'] <=> $people[1]
['age']) + 1;
echo "Diferencia: $diff <br>";
echo $people[0]['name'] . $messages[$pos] .
$people[1]['name'];
?>

</body>
</html>