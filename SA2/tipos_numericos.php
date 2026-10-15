<?php
echo "<h3>1. ENTEROS</h3>";
echo PHP_INT_SIZE . "<br>";
echo PHP_INT_MIN . "<br>";
echo PHP_INT_MAX . "<br>";

echo "<h3>2. BASES NUMÉRICAS</h3>";
$a = 0b100; //binario
echo "Binario 0b100: $a (" . gettype($a) . ")<br>";
$a = 0100; //octal
echo "Octal 0100: $a (" . gettype($a) . ")<br>";
$a = 0x100; //hexadecimal
echo "Hexadecimal 0x100: $a (" . gettype($a) . ")<br>";

echo "<h3>3. DIVISIÓN</h3>";
$a = 3/2; // la división entre enteros no da problemas.
echo "3 / 2 = $a<br>"; //1.5

echo "<h3>4. CASTING</h3>";
$b = 7.5;
echo "Valor original: $b (" . gettype($b) . ")<br>";
$a = (int)$b; //casting a int
echo "Después del casting: $a (" . gettype($a) . ")<br>"; //7, se trunca

echo "<h3>5. NOTACIÓN CIENTÍFICA</h3>";
$b = 7e2; //notación científica
echo "7e2: $b (" . gettype($b) . ")<br>";
$b = 7E2;
echo "7E2: $b (" . gettype($b) . ")<br>";