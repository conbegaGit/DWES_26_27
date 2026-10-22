<?php
echo "1. Primer for anidado <br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) { # Los bucles anidados de toda la vida, cuando recorre este por completo el bucle exterior sigue su recorrido
        echo "Dentro de 2 for. i: $i j: $j <br>";
        if ($j == 1) {
            break; # Lo mismo que poner break 1, es decir, haces break a un solo nivel de bucles
        }
    }
}

echo "2. Segundo for anidado <br>";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        echo "i: $i j: $j <br>";
        if ($j == 1) {
            break 2; # Hace break a 2 niveles de bucles
        }
    }
    echo "Mensaje fantasma <br>"; # Tras el break 2, sale directamente de ambos bucles, no se llega a imprimir el mensaje 
}

echo "<br>3. Sentencia continue<br>";
for ($i = 0; $i < 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "$i<br>";
}
?>