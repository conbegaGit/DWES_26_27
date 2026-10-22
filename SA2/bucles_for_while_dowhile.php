<?php
    echo "<h2>1. Bucle FOR</h2>";

    for ($i = 0; $i<5; $i++){ // inicio, condición e incremento en la misma línea
        echo "En el for $i <br>"; // se imprime del 0 al 4
    }

    echo "<h2>2. Bucle WHILE</h2>";
    $i = 0; // se reinicia el contador antes del bucle
    while ($i<5) { // se comprueba la condición antes de entrar
        echo "En el while $i <br>";
        $i++; // hay que incrementar dentro, si no el bucle sería infinito
    }

    echo "<h2>3. Bucle DO WHILE</h2>";
    $i = 0;
    do { // primero se ejecuta y luego se comprueba la condición
        echo "En el do-while: $i <br>"; // se imprime una vez aunque la condición sea falsa
        $i++;
    } while ($i < 0); // 1 no es menor que 0, así que el bucle termina
