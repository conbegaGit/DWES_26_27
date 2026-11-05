<?php

echo "<h4>1. Redondear números</h4>";

// round(): redondear un número

$numero = 7.856;

echo "<p>Número original: $numero</p>";
echo "<p>Redondeado: " . round($numero) . "</p>";
echo "<p>Dos decimales: " . round($numero, 2) . "</p>";

echo "<h4>2. Número aleatorio</h4>";

// rand(): Generar un número aleatorio

$numero = rand(1, 10);

echo "<p>Númeor generado: $numero</p>";

echo "<p4>3. Máximo y mínimo</h4>";
//Cada vez que recargamos la página genra un número aleatorio entre 1 y 10, ambos incluídos
//max() y min(): Obtener el máximo y el mínimo

$notas = [7, 9, 5, 8, 6];

echo "<p>N";