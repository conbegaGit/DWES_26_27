<?php
    echo "<h3> IF ELSE IF</h3>";
    $var = 10;
    if ($var < 10) {
        echo "La variable es menor que 10";
    } elseif ($var == 10) {
        echo "La variable es igual a 10";
    } else {
        echo "La variable es mayor que 10";
    }

    echo "<h3> SWITCH</h3>";
    $opcion = 2;
    switch ($opcion) {
        case 1:
            echo "Opción 1 seleccionada";
            break;
        case 2:
            echo "Opción 2 seleccionada";
            break;
        case 3:
            echo "Opción 3 seleccionada";
            break;
        default:
            echo "Opción no válida";
    }