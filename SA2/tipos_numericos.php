<?php
echo "<h2>Tipos numéricos en PHP</h2>";

/*1. Información sobre los enteros */
echo "<h3>1. Tipo integer</h3>";

/*
PHP_INT_SIZE, PHP_INT_MIN y PHP_INT_MAX dependen de la plataforma PHP.
En un sistema de 64 bits, normalmente un entero ocipa 8 bytes y el
rango va de -9.223.372.036.854.775.808 a 9.233.372.036.854.775.807.
*/
echo "Bytes de un entero: " . PHP_INT_SIZE . "<br>";
echo "Entero mínimo: " . PHP_INT_MIN . "<br>";
echo "Entero máximo: " . PHP_INT_MAX . "<br>";

/*2. Diferentes bases numéricas */
echo "<h3>2. Bases numéricas</h3>";

$a = 0b100; // Binario
echo "Binario 0b100: %a (" . gettype($a) . ")<br>";

$a = 0100; // Octal
echo "Octal 0100: %a (" . gettype($a) . ")<br>";

$a = 0x100; // Hexadecimal
echo "Hexadecimal 0x100: %a (" . gettype($a) . ")<br>";

/* 3. División */
echo "<h3>3. División</h3>";

$a = 3/2; // la división entre enteros no da problemas
echo $a. "<br>"; // 1.5 (double)

/* 4. Casting */
echo "<h3>4. Casting</h3>";
$b = 7.5;
$a = (int) $b; //casting a int
echo $a."<br>";