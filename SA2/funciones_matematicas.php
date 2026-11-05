<?php
echo"<h4>1. Redondear números</h4>";

// round() : Redondear un número
$numero = 7.856;
$redondeado = round($numero, 2);
echo "<p>Número original: $numero</p>";
echo "<p>Número redondeado: $redondeado</p>";
echo"<p>Redondeado a 2 decimales:" . round($numero,2) . "</p>";

echo"<h4>2. Número aleatorio</h4>";
// rand() : Generar un número aleatorio
$numero_aleatorio = rand(1, 10);
echo "<p>Número generado: $numero_aleatorio</p>";    

echo"<h4>3. Máximo y mínimo</h4>";
// max() y min() : Encontrar el valor máximo y mínimo
$notas = [7,9,5,8,6];

echo "<p>Nota máxima: " . max($notas) . "</p>";
echo "<p>Nota mínima: " . min($notas) . "</p>";