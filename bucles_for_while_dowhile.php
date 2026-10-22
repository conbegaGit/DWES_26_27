<?php
    echo "<h3>Bucle FOR</h3>";
        for ($i=1; $i<=10; $i++) {
            echo "El valor de i es: $i <br>";
        }
    
    echo "<h3>Bucle WHILE</h3>";
        $j = 1;
        while ($j <= 10) {
            echo "El valor de j es: $j <br>";
            $j++;
        }
    
    echo "<h3>Bucle DO WHILE</h3>";
        $k = 1;
        do {
            echo "El valor de k es: $k <br>";
            $k++;
        } while ($k <= 10);

?>