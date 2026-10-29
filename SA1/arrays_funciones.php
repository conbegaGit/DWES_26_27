<?php

    echo "<h4>1. Comprobar si existe un valor: in_array</h4>"; 

    $lenguajes = ["PHP", "Java", "Python"];

    if (in_array("PHP", $lenguajes)) {
        echo "El lenguaje existe";
    } else {
        "El módulo no existe";
    }

    //El tercer argumento de in_array() permite exigir una comparación estricta de tipo y valor

    $numeros = [1, 2, 3];
    var_dump(in_array("2", $numeros, true));    //false
    //el var_dump imprime --> es como un print


?>


