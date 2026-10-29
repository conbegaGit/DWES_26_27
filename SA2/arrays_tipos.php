<?php

    echo "<h3>TIPOS DE ARRAYS</h3>";
    echo "<h4>1. Arrays INDEXADOS</h4>";

    $colores = ["rojo", "verde", "azul"];
    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "El color en \$colores[1] es: $colores[1].<br>";
    
    echo "<h4>2. Arrays ASOCIATIVOS</h4>";

    $alumno = [
        "nombre" => "Lucía",
        "edad" => 20,
        "nota" =>8.5
    ];
    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "El alumno se llama ".$alumno["nombre"].", tiene ".$alumno["edad"]." años y ha sacado un ".$alumno["nota"];

    echo "<h4>3. Arrays MULTIDIMENSIONALES<h4>";

    $alumnos = [
        ["nombre" => "Lucía", "nota" => 8],
        ["nombre" => "Pablo", "nota" => 6],
        ["nombre" => "Marta", "nota" => 9]
    ];

    echo "<pre>";
    print_r($alumnos);
    echo "</pre>";