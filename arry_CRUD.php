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