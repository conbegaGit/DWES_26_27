<?php

    echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

    $lenguajes = ["PHP", "Java", "Python"];

    if (in_array("PHP", $lenguajes)) {
        echo "El lenguaje";
    }
    else{
        echo "El módulo no existe";
    }
    echo "<br>";

    $numeros = [1, 2, 3];
    var_dump(in_array("2", $numeros, true));

    echo "<h4>2. Calcular la media de unas notas</h4>";

    