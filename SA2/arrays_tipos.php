<?php
echo "<h3>TIPOS DE ARRAYS";
echo "<h4>1. Arrays INDEXADOS</h4>";
//Cada elemento se identifica mediante un índice numérico.
$colores = ["rojo", "verde", "azul"];
echo "<pre>";
print_r($colores);
echo "</pre>";

echo "El color en \$colores[1] es: $colores[1]";

echo "<h4>2. Arrays ASOCIATIVOS</h4>";
//Cada elemento se identifica mediante una clave elegida por nosotros.

$alumno = [
    "nombre" => "Lucía",
    "edad" => 20,
    "nota" => 8.5
];
echo "<pre>";
print_r($alumno);
echo "</pre>";
