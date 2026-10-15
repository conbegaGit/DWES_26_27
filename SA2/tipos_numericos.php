<?php
echo "<h1>Tipos numéricos en PHP</h1><br>";
echo "<h2>1.Tipo integer</h2>";

echo  "Bytes de un entero: ".PHP_INT_SIZE."<br>";
echo"Entero mínimo: ".PHP_INT_MIN."<br>";
echo"Entero máximo: ".PHP_INT_MAX."<br>";
echo "<h2>2.Bases numéricas</h2>";
$a = 0b100;
echo"Binario 0b100: $a (" . gettype(@a) . ")<br>";