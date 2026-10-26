<?php

    echo "1. Primer for anidado <br>";
    for ($i=1; $i<=5; $i++) {
        for ($j=1; $j<=5; $j++) {
            echo "El valor de i es: $i y el valor de j es: $j <br>";
        }
    }
    
    
    echo "<br>2. Segundo for anidado <br>";
    for ($i=1; $i<=5; $i++) {
        for ($j=1; $j<=5; $j++) {
            if ($i == 3) {
                break; // Sale del bucle interno cuando i es igual a 3
            }
            echo "El valor de i es: $i y el valor de j es: $j <br>";
        }
    }

    echo "<br>";
    echo "3. Sentencia continue <br>";
    for ($i=1; $i<=5; $i++) {
        for ($j=1; $j<=5; $j++) {
            if ($i == 3) {
                continue; // Salta a la siguiente iteracion del bucle interno cuando i es igual a 3
            }
            echo "El valor de i es: $i y el valor de j es: $j <br>";
        }
    }
?>