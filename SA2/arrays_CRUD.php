<?php
    echo "<h4>1. Crear un array </h4>";

    //existen dos formas de crear un array
    $frutas = ["manzana", "pera", "plátano"];

    $frutas = aray("manzana", "pera", "plátano");

    echo "<pre>";
    print_R($frutas);
    echo "</pre>";

    echo "<h4>2. Consultar un elemento</h4>";

    echo "La fruta en la posición \$frutas[0] es: $frutas[0].<br>";

    $producto = [
        "nombre" => "Teclado",
    ]