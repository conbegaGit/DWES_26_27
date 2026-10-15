<?php 
echo "<h2>Tipos numéricos en PHP</h2>";

//TIPOS DE DATOS EN INTEGER
echo "<h3>1. Tipo integer</h3>";
echo "Bytes de un entero: ". PHP_INT_SIZE. "<br>";
echo "Entero mínimo: ". PHP_INT_MIN. "<br>";
echo "Entero máximo: ". PHP_INT_MAX. "<br>";


//TIPOS DE NUMEROS (EN BASES DIFERENTES)
echo "<h3>2. Bases numéricas</h3>";

$a = 0b100; //en binario
echo "Binario 0b100: $a (". gettype($a).")<br>";

$a = 0100; //octal
echo "Octal 0100: $a (". gettype($a). ")<br>";

$a = 0x100; //hexadecimal
echo "Hexadecimal 0x100: $a (". gettype($a). ")<br>";


//DIVISION
echo "<h3>3. División</h3>";
$a = 3/2; //la división entre enteros no da problemas
echo "3/2 = $a (". gettype($a). ")<br>";


//EL CASTEO DE NÚMEROS
echo "<h3>4. Casting</h3>";
$b = 7.5; //tipo double
echo "Valor original: $b (". gettype($b). ")<br>"; 

$a = (int) $b; //casting a int
echo "Después del casting: $a (". gettype($a). ")<br>";


echo "<h3>5. Notación científica</h3>";
$b = 7e2; //notación científica
echo "Notación científica 7e2: $b (". gettype($b). ")<br>";

$b = 7E2;
echo "Notación científica 7E2: $b (". gettype($b). ")<br>";



?>

