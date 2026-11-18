<?php
define("LIMITE", 1000); //se crea la constante usando define, nombre de la const en mayúsculas y el valor de la constante
echo LIMITE . "<br>";

// Una constante se usa en operaciones como cualquier valor (sin $ delante).
$var1 = 100 + LIMITE;

// Las constantes NO se interpretan dentro de comillas: hay que concatenarlas.
echo "LIMITE + 100 = " . $var1 . "<br>";
echo "Esto no funciona: LIMITE"; // muestra el texto "LIMITE", no su valor
