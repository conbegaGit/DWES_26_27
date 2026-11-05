<?php

echo "<h4>1. Redondear números</h4>";

// round(): Redondear un número al entero más cercano

$numero = 7.856;

echo "<p>Número original: $numero</p>";
echo "<p>Número redondeado: ".round($numero)."</p>";
echo "<p>2 decimales: ".round($numero, 2)."</p>";

echo "<h4>2. Número aleatorio</h4>";

// rand(): Generar un número aleatorio

$numero = rand(1, 10);

echo "<p>Número generado: $numero</p>";

echo "<h4>3. Máximo y mínimo</h4>";

// max() y min(): Obtener el valor máximo y mínimo de un array

$notas = [7, 9, 5, 8, 6];

echo "<p>Nota máxima: ".max($notas)."</p>";
echo "<p>Nota mínima: ".min($notas)."</p>";
