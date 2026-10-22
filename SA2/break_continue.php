<?php
    echo "1. primer for anidado <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "Dentro de 2 for. i: $i j: $j <br>";
            if ($j == 1) {
                break; //es lo mismo que break 1
            }
        }
        echo "-- Fuera del For. i: $i j: $j <br>";
    }
    echo "<br>";
    echo "2. Segundo for anidado: <br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "i: $i j: $j <br>";
            if ($j == 1){
                break 2;
            }
        }
        echo "--- Fuera del for. NO se ejecuta nuca <br>";
    }

    echo "<br>";
    echo "3. Sentencia continue: <br>";
    // que ocurre?
    for ($i = 0; $i < 5; $i = $i + 1) {
        if ($i == 3) {
            continue; //ssalta a la siguiente iteración pero no ejecuta lo de abajo
        }
        echo "$i <br>";
    }