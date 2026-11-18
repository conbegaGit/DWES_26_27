<?php
echo "<h3>1. ENTEROS</h3>";
/*
PHP_INT_SIZE, PHP_INT_MAX y PHP_INT_MIN dependen de la plataforma.
En un sistema de 64 bits un entero ocupa 8 bytes y el rango va
de -9223372036854775808 a 9223372036854775807.
*/
echo "Bytes de un entero: " . PHP_INT_SIZE . "<br>";
echo "Entero mínimo: " . PHP_INT_MIN . "<br>";
echo "Entero máximo: " . PHP_INT_MAX . "<br>";

echo "<h3>2. BASES NUMÉRICAS</h3>";
$a = 0b100; //binario: prefijo 0b
echo "Binario 0b100: $a (" . gettype($a) . ")<br>";
$a = 0100; //octal: prefijo 0
echo "Octal 0100: $a (" . gettype($a) . ")<br>";
$a = 0x100; //hexadecimal: prefijo 0x
echo "Hexadecimal 0x100: $a (" . gettype($a) . ")<br>";

echo "<h3>3. DIVISIÓN</h3>";
$a = 3/2; // la división entre enteros no da problemas: devuelve float si no es exacta.
echo "3 / 2 = $a<br>"; //1.5
$a = 2/3;
echo "2 / 3 = $a<br>"; //0.66666666666667

echo "<h3>4. CASTING</h3>";
$b = 7.5;
echo "Valor original: $b (" . gettype($b) . ")<br>";
$a = (int)$b; //casting a int
echo "Después del casting: $a (" . gettype($a) . ")<br>"; //7, se trunca (no redondea)

echo "<h3>5. NOTACIÓN CIENTÍFICA</h3>";
// Es indiferente usar "e" minúscula o "E" mayúscula.
$b = 7e2; //notación científica
echo "7e2: $b (" . gettype($b) . ")<br>";
$b = 7E2;
echo "7E2: $b (" . gettype($b) . ")<br>";
