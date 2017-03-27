<?php

$biblioteca = [
    "cine" => [
        "El guión",
        "Hitchcock",
    ],
    "programacion" => [
        "Patterns",
        "Clean Code",
        "Refactoring"
    ],
];


echo "<ul>";
foreach ($biblioteca as $categorias => $libros) {
    echo "<li>$categorias</li>";
    foreach ($libros as $libro) {
        echo "<ul><li>$libro</li></ul>";
    };
};
echo "</ul>";

?>