<?php
    echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

    $lenjuajes = ["PHP", "Java", "Python"];

    if (in_array("PHP", $lenjuajes)){
        echo "El lenguaje existe";
    } else{
        echo "El modilo no existe";
    }