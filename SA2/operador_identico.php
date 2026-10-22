<?php
    $a = 3;
    $b = "3";
    if ($a == $b) {
        echo "Son iguales <br>";
    } else {
        echo "No son iguales <br>";
    }

    if ($a === $b) {
        echo "<br>Son idénticos <br>";
    } else {
        echo "<br>No son idénticos <br>";
    }