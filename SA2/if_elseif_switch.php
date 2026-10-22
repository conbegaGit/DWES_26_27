<?php
    echo "<h2>IF ELSE IF</h2>";
    $if = 3;

    if ($if == 1) { // se comprueba la primera condición
        echo "Es un uno";
    } elseif ($if == 2) { // si la anterior no se cumple, se pasa a la siguiente
        echo "Es un dos";
    } elseif ($if == 3) {
        echo "Es un tres"; // se imprime este porque $if vale 3
    } else { // si no se cumple ninguna condición entra aquí
        echo "no es ni uno, ni dos, ni tres";
    }

    echo "<h2>SWITCH</h2>";
    $switch = 100;
    switch ($switch) { // se compara el valor de la variable con cada case
        case 1:
            echo "Es un uno";
            break; // el break sale del switch, sin él seguiría ejecutando los siguientes case
        case 2:
            echo "Es un dos";
            break;
        case 3:
            echo "Es un tres";
            break;
        default: // si no coincide con ningún case entra aquí. En este caso se imprime porque vale 100
            echo "no es ni uno, ni dos, ni tres";
            break;
    }
