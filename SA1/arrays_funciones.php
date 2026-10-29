<?php

echo "<h4>1. Comprobar si existe un valor: in_array </h4>";

$lenjuajes = ["PHP", "Java", "Python"];

if (in_array("PHP", $lenjuajes)) {
    echo "El lenguaje existe";
} else {
    echo "El modulo no existe";
}

// El tercer argumento de in_array() permite exigir una comparación estricta de tipo y valor.

$numeros = [1, 2, 3];
var_dump(in_array("2", $numeros, true)); // false

echo "<h4>2. Calcular la media de unas notas</h4>";


?>