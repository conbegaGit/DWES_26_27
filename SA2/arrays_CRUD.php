<?php
    echo "<h4>1. Crear un array</h4>";

    $frutas = ["manzana", "pera", "platano"];

    $frutas = array("manzana", "pera", "platano");

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>2. Consultar un elemento</h4>";

    echo "La fruta en la posición \$frutas[0] es $frutas[0]<br>";

    echo "<h4>3. Añadir elementos</h4>";

    //array_push($array, valor); Añade elementos al final.
    //array_pop($array); Elimina y devuelve el ultimo elemento.
    //array_shift($array); elimina y devuelve el primer elemento.
    //array_unshift($array); añade elementos al principio.

    $frutas[] = "naranja";
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

    $productos["precio"] = 30;
    echo "<pre>";
    print_r($productos);
    echo "</pre>";

    echo "<h4>5. Eliminar elementos</h4>";

    unset($frutas[1]);

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    $frutas = array_values($frutas);

    echo "<pre>";
    print_r($frutas);
    echo "</pre>";


    
