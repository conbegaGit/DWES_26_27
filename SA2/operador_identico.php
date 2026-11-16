<?php
    $a = 3;
    $b = "3";

    if ($a == $b) { // == solo compara el valor, PHP convierte el tipo para compararlas
        echo "Son iguales <br>";
    } else {
        echo "No son iguales <br>";
    }

    if ($a === $b) { // === compara el valor y el tipo de dato, un int no es idéntico a un string
        echo "Son idénticos <br>";
    } else {
        echo "No son idénticos <br>";
    }
