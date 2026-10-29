<?php

echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

$lenguajes = ["PHP", "Java", "Python"];

if (in_array("PHP", $lenguajes)) {
    echo "El lenguaje existe <br>";
} else {
    echo "El módulo NO existe <br>";
}
//El tercer argumento de in_array() permite exigir una comparación estricta de tipo y valor.

$numeros = [1, 2, 3];
var_dump(in_array("2", $numeros, true)); //false





echo "<h4>2. Calcular la media de unas notas</h4>";

$notas = [7, 8, 5, 9, 6];


$media =array_sum($notas) / count($notas);
echo "La media de las notas es: $media <br>";

//array_sum() suma los valores. Si el array puede estar vacío, hay que comprobarlo antes de dividir para evitar una división por cero.
?>