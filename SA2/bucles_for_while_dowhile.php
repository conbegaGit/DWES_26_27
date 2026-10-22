<?php
    echo "<h3>For</h3>";
    for ($i = 1; $i <= 5; $i++) {
        echo "En el for  $i<br>";
    }

    echo "<h3>2. Bucle WHILE</h3>";
    $i = 0;
    while ($i < 5) {
        echo "En el while $i<br>";
        $i++;
    }

    echo "<h3>3. Bucle DO WHILE</h3>";
    $i = 0;
    do {
        echo "En el do-while $i<br>";
        $i++;
    } while ($i < 0);
?>  