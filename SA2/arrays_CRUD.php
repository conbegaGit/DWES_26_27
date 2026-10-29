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

    echo "<h4>3. Añadir elementos</h4>";
    $frutas[] = "naranja"; //añadir al final
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    array_push($frutas, "kiwi"); //añadir al final
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>4. Modificar elementos</h4>";
    
    $frutas[0] = "s"; //modificar el primer elemento
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    $productos["precio"] = 30;
    echo "<pre>";
    print_r($productos);
    echo "</pre>";

    echo "<h4>5. Eliminar elementos</h4>";
        unset($frutas[1]);
        //Para obtener valores con indices numericos nuevos:
        $numeros = array_values($frutas);
?>