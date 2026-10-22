<?php
    echo "1. Primer for anidado: <br>";
    for ($i =0; $i <3; $i++){
        for ($j = 0; $j < 3; $j++){
            echo "Dentro de 2 for. i: $i j: $j <br>";
            if ($j = 1){
                break;
            }
        }
        echo "-- Fuera del for. i: $i j: $j <br>";
    }

    echo "<br>";
    echo "2. Segundo for anidado: <br>";
    for ($i =0; $i <3; $i++){
        for ($j = 0; $j < 3; $j++){
            echo "Dentro de 2 for. i: $i j: $j <br>";
            if ($j = 1){
                break 2;
            }
        }
        echo "----- Fuera del for. i: $i j: $j <br>";
    }

    echo "<br>";
    echo "3. Sentencia continue: <br>";
    for ($i = 0; $i < 5 ; $i++){
        if ($i == 3){
            continue;
        }
        echo "i = $i <br>";
    }