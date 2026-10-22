<?php
    echo "<h3> BUCLES </h3>";

    echo "<h4> FOR </h4>";
    for ($i = 0; $i < 5; $i++) {
        echo "Iteración: $i<br>";
    }

    echo "<h4> WHILE </h4>";
    $j = 0;
    while ($j < 5) {
        echo "Iteración: $j<br>";
        $j++;
    }

    echo "<h4> DO WHILE </h4>";
    $k = 0;
    do {
        echo "Iteración: $k<br>";
        $k++;
    } while ($k < 5);
?>