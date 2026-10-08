<?php
$var1 = 100;
$var3 = 200;
echo $var3;
echo "<br>";

$var3 = 300;
echo $var3;
echo "<br>";

// Operación con una variable no inicializada: PHP la toma como 0
echo $var3 - 100; // muestra 200
echo "<br>";

echo $var3 + $var2; // $var2 no existe, se toma como 0 -> muestra 300
echo "<br>";

echo $var3 * $var2; // $var2 no existe, se toma como 0 -> muestra 0
echo "<br>";