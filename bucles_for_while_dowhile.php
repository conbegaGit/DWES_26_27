<?php

    echo"<h3>1. Bucle for</h3>";
    for ($i = 0; $i < 5; $i++) {
        echo "En el for<br>";
        echo "El valor de i es: $i <br>";
    }
    echo "<h3>2. Bucle while</h3>";
    $i = 0;
    while($i < 5) {
        echo "En el while<br>";
        echo "El valor de i es: $i <br>";
        $i++;
    }
    echo "<h3>3. Bucle do while</h3>";
    $i = 0;
    do {
        echo "En el do while<br>";
        echo "El valor de i es: $i <br>";
        $i++; 
    } while($i < 0);