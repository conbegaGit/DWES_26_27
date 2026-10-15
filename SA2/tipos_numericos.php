<?php
echo "<h1>Tipos de datos</h1>";
echo "<h2>Estos son los tipos de datos numéricos en PHP:</h2>";


echo "Bytes de un entero: " . PHP_INT_SIZE . "<br>";
echo "Valor máximo de un entero: " . PHP_INT_MAX . "<br>";
echo "Valor mínimo de un entero: " . PHP_INT_MIN . "<br>";


echo "<h2>Bases numericas:</h2>";
$a = 0b100;
echo "Binario: $a (". gettype($a) .  ")<br>";
$a = 0100;
echo "Octal: $a (". gettype($a) .  ")<br>";
$a = 0x100;
echo "Hexadecimal: $a (". gettype($a) .  ")<br>";

echo "<h2>Divisiones:</h2>";
$a = 3 / 2;
echo "División 3/2: $a (". gettype($a) .  ")<br>";

echo "<h2>Casting:</h2>";
$b = 7.5;
$a = (int) $b;
echo "Valor original: $b (". gettype($b) .  ")<br>";
echo "Despues del casting: $a (". gettype($a) .  ")<br>";

echo "<h2>Notacion cientifica:</h2>";
$a = 7e2;
echo "Notacion cientifica: $a (". gettype($a) .  ")<br>";
