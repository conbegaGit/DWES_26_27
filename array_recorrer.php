<?php

    echo"<h4>foreach: la forma mas habitula</h4>";

    $frutas=["manzanas","pera","naranja"];
    foreach($frutas as $fruta){
        echo $fruta."<br>";
    }

    echo"<h4>foreach: obtener la clave y valor</h4>";

    $notas =[
        "lucia"=>8,
        "alex"=>6,
        "marta"=>9,
    ];
     foreach($notas as $nombre=>$nota){
        echo"$nombre ha sacadoun $nota<br>";
     }

    echo"<h4>recorer con for</h4>";
    $notas=[1,2,3,4,5,6,7,8,9];
    for($i=0;$i<count($notas);$i++){
        echo $notas[$i]."<br>";
    }

