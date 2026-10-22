<?php
    echo "<h3> 1. Primer for anidado </h3>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "Dentro de 2 for. i: $i, j: $j<br>";
            if ($j == 1) {
                break;
            }
        }
        echo "-- Fuera del For. i: $i j: $j<br>";
    }

    echo "<h3> 2. Segundo for anidado </h3>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo "Dentro de 2 for. i: $i, j: $j<br>";
            if ($j == 1) {
                continue;
            }
        }
        echo "-- Fuera del For. i: $i j: $j<br>";
    }

    echo "<h3> 3. Sentencia continue: </h3>";
    for ($i = 0; $i < 5; $i++) {
        if ($i == 3) {
            continue;
        }
        echo "Iteración: $i<br>";
    }
?>