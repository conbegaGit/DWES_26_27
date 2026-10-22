<?php
echo "<h3>1. Primer for anidad: </h3><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "Dentro de 2 for. i: $i j: $j <br>";
        if ($j == 1) {
            break; //es lo mismo que poner break 1
        }
    }
    echo "-- Fuera del For. i: $i j: $j <br>";
}

echo "<h3>2. Segundo for anidado: </h3><br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "i: $i j: $j <br>";
        if ($j == 1) {
            break 2;
        }
    }
    echo "----- Fuera del For. NO se ejecuta nunca <br>";
}

echo "<h3>3. Sentencia continue: </h3><br>";
for ($i = 0; $i < 5; $i = $i + 1) {
    if ($i == 3) {
        continue;
    }
    echo "$i <br>";
}