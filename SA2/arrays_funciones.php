<?php
echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

$lenjuajes = ["PHP","Java","Python"];

if (in_array("PHP",$lenjuajes)) {
    echo "El lenguaje existe";
} else {
    echo "El módulo no existe";
}

$numeros = [1,2,3];
var_dump((in_array("2",$numeros,true))); //false

echo "<h4>2. Calcular la media de unas notas</h4>";

$notas = [7, 8, 5, 9, 6];

$media = array_sum($notas) / count($notas);
echo "La media es: ".$media;