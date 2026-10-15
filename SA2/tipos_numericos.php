<?php

echo"<h2>Tipos Numéricos en PHP</h2>";

echo "<h3>1. Tipo integer</h3>";
echo "Bytes de un entero: ".PHP_INT_SIZE."<br>";
echo "Valor máximo de un entero: ".PHP_INT_MAX."<br>";
echo "Valor mínimo de un entero: ".PHP_INT_MIN."<br>";

echo "<h3>2. Bases numéricas</h3>";
$a = 0b1010; 
echo "Binario 0b1010: " . $a . " (" . gettype($a) . ")<br>";
$a = 0100; 
echo "Octal 0100: " . $a . " (" . gettype($a) . ")<br>";
$a = 0x100; 
echo "Hexadecimal 0x100: " . $a . " (" . gettype($a) . ")<br>";

echo "<h3>3. División</h3>";
$a = 3/2;
echo "3/2: " . $a . " (" . gettype($a) . ")<br>";

echo "<h3>4. Casting a integer</h3>";
$b = 7.5;
$a = (int)$b;
echo "Valor original: " . $b ." (" . gettype($b) . ")<br>";
echo "Valor convertido a integer: " . $a . " (" . gettype($a) . ")<br>";

echo "<h3>5. Notación científica</h3>";
$b = 7e2;
echo "7e2: " . $b . " (" . gettype($b) . ")<br>";

$b = 7E2;
echo "7E2: " . $b . " (" . gettype($b) . ")<br>";