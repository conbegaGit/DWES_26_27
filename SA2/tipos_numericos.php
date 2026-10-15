<!DOCTYPE html>
<html>
    <head>
        <title>tipos numericos</title>
    </head>
    <body>
        <?php
        echo "<h2>Tipos numéricos en PHP</h2>";
        echo "<h3>1. Tipo de integer</h3>";
        
        echo "Bytes de un entero: ".PHP_INT_SIZE."<br>"; //pone los bytes de un numero entero
        echo "Entero minimo: ".PHP_INT_MIN."<br>"; //pone la cantidad minima de un numero entero
        echo "Entero maximo: ".PHP_INT_MAX."<br>"; //pone la cantidad maxima de un numero entero

        echo "<h3>2. Bases numéricas</h3>";
        $a = 0b100;
        echo "Binario 0b100: $a (".gettype($a).")<br>"; //Muestra en decimal el resultado de binario
        $a = 0100;
        echo "Octal 0100: $a (".gettype($a).")<br>"; //Muestra en decimal el resultado de octal
        $a = 0x100;
        echo "Hexadecimal 0x100: $a (".gettype($a).")<br>"; //Muestra en decimal el resultado de hexadecimal

        echo "<h3>3. Division</h3>";
        $a = 3/2;
        echo "Division de 2/3 = $a (".gettype($a).")<br>";
        $b = 7.5;

        echo "<h3>4. Casting</h3>";
        
        ?>
    </body>
</html>