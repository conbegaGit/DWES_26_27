<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2>Tipos numéricos en PHP</h2>";
        /* 1. Información sobre los enteros */
        echo "<h3>1. Tipo numérico</h3>";
    
        /* 
        PHP_INT_SIZE, PHP_INT_MAX, PHP_INT_MIN dependen de la plataforma PHP.
        En un sistema de 64 bits, ormalemnte un entero ocupa 8 bytes
        y el rango va de -9223372036854775808 a  9223372036854775807.
        */
        echo "Byte de un entero: " . PHP_INT_SIZE . "<br>";
        echo "Entero mínimo: " . PHP_INT_MIN . "<br>";
        echo "Entero máximo: " . PHP_INT_MAX . "<br>";
    
        /*Diferentes bases numéricas*/
        echo "<h3>2. Bases numéricas</h3>";
        $base_binario = 0b100; // se necesita poner un 0b antes del numero en binario
        $base_octal = 0100; // es poner un 0 antes del numero en octal
        $base_hexadecimal = 0x100; // se necesita poner un 0x antes del nuero en hexadecimal

        echo "Binario 0b100: $base_binario (" . gettype($base_binario) . ")<br>";
        echo "Octal 0100: $base_octal (" . gettype($base_octal) . ")<br>";
        echo "Hexsadecimal: $base_hexadecimal (" . gettype($base_hexadecimal) . ")<br>";

        /* 3. Division */
        echo "<h3>3. Division</h3>";
        
        $division = 2/3;
        echo "El valor de 2/3 es de: $division <br>";

        /*4. Casting */
        echo "<h3> Casting </h3>";

        $decimal = 7.5;
        $casteado = (int)$decimal;
        echo "La variable casteado es: $casteado <br>
        Que no es lo mismo que el valor de decimal: $decimal";

        /*5. Notación cientifica*/
        echo "<h3> Notacion cientifica </h3>";

        /* No presenta ningun error utilizar mayusculas o minusculas al utilizar notacion cientifica.*/
        $minus = 7e2;
        $mayus = 7E2;
        echo "- Utilizando \"e\": $minus <br>- Utilizando \"E\": $mayus";
    ?>
</body>
</html>