<?php

    echo "<h4>1. Foreach: la forma más habitual</h4>";

    $frutas = ["manzana", "pera", "plátano"];

    foreach ($frutas as $fruta){
        echo $fruta . "<br>";
    }

    echo "<h4>2. Foreach: obtener la clave y el valor</h4>";

    $notas = [
        "Lucía" => 8,
        "Pablo" => 6,
        "Marta" => 9
    ];

    foreach ($notas as $nombre => $nota){
        echo "$nombre ha sacado un $nota <br>";
    }

    echo "<h4>3. Recorrer con for</h4>";

    $notas = [7, 8, 5, 9, 6];

    for ($i = 0; $i < count($notas); $i++){
        echo $notas[$i]."<br>";
    }