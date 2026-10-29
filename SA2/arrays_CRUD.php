<?php
    echo "<h4>1. Crear un array</h4>";

    $frutas = ["manzana","pera","plátano"];

    $frutas = array("manzana","pera","plátano");

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>2. Consultar un elemento</h4>";
    
    echo "La fruta en la posición \&frutas[0] es: $frutas[0].<br>";

    echo "<h4>3. Añadir elementos</h4>";

    $frutas[] = "naranjas";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    array_push($frutas, "uva", "kiwi");

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>4. Modificar elementos</h4>";

    $frutas[0] = "sandía";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    $producto["precio"] = 30;
    echo "<pre>";
    print_r($producto);
    echo "</pre>";

    