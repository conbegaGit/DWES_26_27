<?php

    echo"<h4>Redondear números</h4>";

    //round() redondea un número al entero más cercano
    $numero=5.567;
    echo"<p>Número original: $numero</p>";
    echo"<p>Número redondeado: ".round($numero)."</p>";
    echo"<p>Número redondeado a 2 decimales: ".round($numero,2)."</p>";

    echo"<h4>Numero aleatorio</h4>";
    // rand() genera un número aleatorio
    $numero=rand(1,100);
    echo"<p>Número generado: $numero</p>";

    echo"<h4>Maximo y minimo</h4>";
    //max() devuelve el valor máximo de un conjunto de valores
    //min() devuelve el valor mínimo de un conjunto de valores

    $notas=[7,8,9,10,5,6];
    echo"<p>Notas máximas: ".max($notas)."</p>";
    echo"<p>Notas mínimas: ".min($notas)."</p>";