<?php

     echo"<h3>if_elseif</h3>";
    $var = 3;
    if ($var == 1) {
        echo "Es un uno";
    }elseif ($var == 2) {
        echo "Es un dos";
    }elseif ($var == 3) {
        echo "Es un tres";
    }else{
        echo "No es un uno, ni un dos, ni un tres";
    } 

    echo"<h3>switch</h3>";
    $var = 3;
    switch($var){
        case 1:
            echo "Es un uno";
            break;
        case 2:
            echo "Es un dos";
            break;
        case 3:
            echo "Es un tres";
            break;
        default:
            echo "No es un uno, ni un dos, ni un tres";
    }