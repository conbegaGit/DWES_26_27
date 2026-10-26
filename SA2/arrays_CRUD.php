<?php
    echo "<h4>1. Crea una array</h4>";

    //existen dos formas de crear un array
    $frutas = ["manzana", "pera", "plátano"];

    $frutas = array("manzana", "pera", "plátano");

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>2. Consultar elementos</h4>";

    echo "La fruta en la posición 0 es: ".$frutas[0]."<br>";