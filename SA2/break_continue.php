<?php   
    echo "1. Primer for anidados<br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "Dentro de 1 for. i: $i j: $j<br>";
            if ($j == 1) {
                break;
            }
        }
        echo "Fuera de For. i: $i";
    }
    
    echo "<br>";
    echo "2. Segundo for anidados<br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "i: $i j: $j<br>";
            if ($j == 1) {
                break 2;
            }
        }
        echo "Fuera de For. nunca se ejecuta<br>";
    }

    echo "<br>";
    echo "3. Sentencia continue:<br>";

    for ($i = 0; $i < 3; $i++) {          
        if ($i == 1) {
            continue; 
        } 
        echo "$i<br>";
    }   
