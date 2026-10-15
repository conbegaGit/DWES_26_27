<?php
    echo "<h2>Tipos de datos numéricos</h2>";
    echo "<h3>Tipo Integer</h3>";

    echo "Bytes de un entero: " . PHP_INT_SIZE . "<br>"; // Tamaño en bytes
    echo "PHP_INT_MIN: " . PHP_INT_MIN . "<br>";         // Entero mínimo
    echo "PHP_INT_MAX: " . PHP_INT_MAX . "<br>";         // Entero máximo

    $a = 0b100;  // Binario (4)
    echo "Binario: $a <br>";

    $a = 0100;   // Octal (64)
    echo "Octal: $a <br>";

    $a = 0x100;  // Hexadecimal (256)
    echo "Hexadecimal: $a <br>";

    $a = 3 / 2;  // Divide y da float
    echo "$a <br>"; // 1.5

    echo "<h3>Tipo Float</h3>";

    $b = 7.5;
    $a = (int)$b; // Casting a int (trunca)
    echo "$a<br>"; // 7

    $b = 7e2;    // Notación científica (700)
    echo "$b<br>";

    $b = 7E2;    // Igual, con E mayúscula
    echo "$b<br>";
?>