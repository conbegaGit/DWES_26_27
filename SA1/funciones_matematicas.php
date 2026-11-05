<?php

    echo "<h4>1. Redondear números</h4>";
    //round(): redondear un número 

    $numero = 7.856;

    echo "<p>Número original: $numero</p>";
    echo "<p>Redondeado: " . round($numero) . "</p>";
    echo "<p>Dos decimales: " . round($numero, 2) . "</p>";



    echo "<h4>2. Número aleatorio</h4>";
    //rand(): generar un número aleatorio

    $numero = rand(1, 10);

    echo "<p>Número aleatorio entre 1 y 10: $numero</p>";



    echo "<h4>3. Maximo u minimo</h4>";
    //cada vez que recargamos la mpagina se genera un número aleatorioe ntre 1 y 10 , ambos incluidos
    //max() y min(): obtener el maximo y el minimo

    $notas = [7, 9, 5, 8, 6];

    echo "<p>Nota máxima: " . max($notas) . "</p>";
    echo "<p>Nota mínima: " . min($notas) . "</p>"; 

?>