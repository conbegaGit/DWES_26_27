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

    echo "<h4>3. Añadir elementos </h4>";
    //array_push($array, valor): Añade elementos al final.
    //array_pop($array): Elimina y devuelve el último elemento
    //array_shift($array): Elimina y devuelve el primer elemento.
    //array_unshift($array, $valor): Añade elementos al principio

    $frutas[] = "naranja";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    array_push($frutas, "uva", "kiwi");

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>4. Modificar elementos </h4>";

    $frutas[0] = "sandía";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    $producto["precio"] = 30;
    echo "<pre>";
    print_r($producto);
    echo "</pre>";

    echo "<h4>5. Eliminar elementos</h4>";

    unset ($frutas[1]);
    //Para obtener valores coníndices numéricos nuevos:
    $numeros = array_values($frutas);
    
    
    
    
    
    unset($producto["stock"]);
    //unset() elimina el elemento, pero no necesariamente reorganiza los índices numéricos