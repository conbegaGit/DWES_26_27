<?php 
    define("LIMITE", 1000);
    // Siempre en mayusculas


    echo "<h2>Tipos númericos en PHP</h2>";

    echo "<h3>1. Tipo integer</h3>";

    echo "Bytes de un entero: " . PHP_INT_SIZE . "<br>";
    echo "Entero mínimo: " . PHP_INT_MIN . "<br>";
    echo "Entero máximo: " . PHP_INT_MAX . "<br>";

    echo "<h3>2. Bases numéricas</h3>";

    $a = 0b100; // Binario
    echo "Binario 0b100: $a (" . gettype($a) . ")<br>";

    $a = 0x100; // Hexadecimal
    echo "Hexadecimal 0x100: $a (" . gettype($a) . ")<br>";

    $a = 0100; // Octal
    echo "Octal 0100: $a (" . gettype($a) . ")<br>";

    echo "<h3>3. División</h3>";
    $a = 3/2;
    echo "3/2 = $a (" . gettype($a) . ")<br>";

    echo "<h3>4. Casting</h3>";

    $b = 7.5;
    $a = (int) $b;

    echo "Valor original: $b (" . gettype($b) . ")<br>";
    echo "Después del casting: $a (" . gettype($a) . ")<br>";

    echo "<h3>5. Notación científica</h3>";
    // 7e2 = 700 (Double)
    // 7E-E = 0.07 (Double)
    ?>