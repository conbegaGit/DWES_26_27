<?php
    echo"<h4>1. foreach: la forma más habitual</h4>";
    $frutas = ["manzana", "pera", "plátano", "naranja"];
    foreach($frutas as $fruta){
        echo $fruta."<br>";
    }
    //foreach recorre los elementos y guarda cada valor, en cada iteración

    echo"<h4>2. foreach: Obtener la clave y el valor</h4>";
    $notas = [
        "Lucia" => 8,
        "Pablo" => 6,
        "Marta" => 9
    ];

    // asociamos una variable a la clave y otra al valor
    
    foreach($notas as $nombre => $nota){
        echo "El alumno $nombre tiene una nota de $nota.<br>";
    }
    
    echo"<h4>3. Recorrer con for</h4>";
    
    $notas = [7,8,5,9,6];
    
    for($i=0;$i<count($notas);$i++){
        echo $notas[$i]."<br>";
    }