<?php
    echo "<h1>Tipos de Arrays </h1>";
    echo "<h4>1. Arrays Indexados</h4>";

    // Cada elemento se identifica mediante un indice numerico
    $colores = ["rojo", "verde","azul"];
    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "El color en \$colores[1] es: $colores[1].<br>";

    echo "<h4>2. Arrays ASOCIATIVOS</h4>";

    // Cada elemento se identifica mediante una clase elegida por 
    $alumno = [
        "nombre" =>"Lucia",
        "edad" => 20,
        "nota" => 8.5,
    ];
    echo "<pre>";
    print r ($alumno);
    echo "</pre>";

    echo "El alumno se llama ".$alumno["nombre"].", tiene".$alumno["edad"] ." años y ha sacado un ".alumno["nota"]. "<br>";

    $alumno = [
        ["nombre" => "Lucia", "nota" => 8],
        ["nombre" => "Pablo", "nota" => 6],
        ["nombre" => "Marta", "nota" => 9],

    ];
    echo "<pre>";
    print_r($alumno);
    echo "<pre>";

    echo "El nombre del alumn@ en la posicion \$alumnos[1]['nombre'] es ".$alumnos[1]["nombre"]."<br>";
    echo "La nota del alumn@ en la posicion \$alumnos[2]['nota'] es ".$alumnos[2]["nota"]."<br>";


?>