<?php
    $var = 3;
    if ($var == 1){
        echo "es un uno";
    }elseif ($var == 2){
        echo "Es un dos";
    }elseif ($var == 3){
        echo "Es un tres";
    }else{
        echo "No es un uno, ni un dos, ni un tres"
    }

    echo "<h3> SWITCH </h3>";
    //switch es equivalente, pero su lectura es más
    $var = 4;
    switch ($var) {
        case 1:
            echo "Es un uno";
            break; // Si no hay un break al final
        case 2:
            echo "Es un dos";
            break;
        case 3:
            echo "Es un tres";
            break;
        default: // se ejecuta si no se da ningún caso
            echo "No es un uno, ni un dos, ni un tres"
    }