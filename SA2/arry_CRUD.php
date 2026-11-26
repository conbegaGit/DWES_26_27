<?php
    echo"<h4>Crear un array</h4>";
    //hay dos formas de crear un array, la primera es con la función array() y la segunda es con los corchetes []
    $array = array("elemento1", "elemento2", "elemento3"); //Esta forma ya no se utiliza
    $array = ["elemento1", "elemento2", "elemento3"];//Esta forma es la más utilizada actualmente
    echo"<pre>";
    print_r($array);
    echo"</pre>";

    echo"<h4>Consultar elementos</h4>";
    echo "El elemento en la posicion 0 es: " . $array[0] . "<br>";

    //añadir elementos al array
    //array_push($array,valor) añade alfinal
    //array_shift(array) eliminar y devuelve eñ primer elemento
    //aray_pop($array)eliminar y develve el ultimo elemento
    //array_unshift($array,$valor) Añade elemento al principio

   
    echo "<h4>Añadir o eliminar elementos</h4>";

    $frutas[] = 'naranja';
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    array_push($frutas, "uva", "kiwi");
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    $ultima = array_pop($frutas);
    echo "Elemento eliminado: " . $ultima;
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    $primera = array_shift($frutas);
    echo "Elemento eliminado: " . $primera;
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    array_unshift($frutas, "manzana", "melocoton");
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>Modificar elementos</h4>";
    $frutas[0]="sandia";
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    echo "<h4>Eliminar elementos</h4>";
    // no reorganiza los valores
    unset($frutas[1]);
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";

    $frutas[] = 'naranja';
    $frutas[] = 'manzana';
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";
     
    // y se ordena manualmente con lo siguente:
    $frutas = array_values($frutas);
    echo "<pre>";
    print_r($frutas);
    echo "</pre>";


    




