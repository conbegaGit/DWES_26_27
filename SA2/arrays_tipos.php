<?php

    echo "<h3>TIPOS DE ARRAYS</h3>";
    echo "<h4>1. Arrays INDEXADOS</h4>";

    // Cada elemento se identifica mediante un índice numérico
    $colores = ["rojo", "verde", "azul"];
    echo "<pre>";
    print_r($colores);
    echo "</pre>";

    echo "El color en \$colores[1] es: $colores[1.<br>";

    echo "<h4>2. Arrays ASOCIATIVOS</h4>";

    //Cada elemento se identifica mediante una clave elegia por nosotros
    $alumno = [
        "nombre" => "Lucía",
        "edad" => 20,
        "nota" => 8.5
    ];
    echo "<pre>"
    print r($alumno);
    echo "</pre";

    echo "El alumno se llama " .$alumno["nombre"] . ", tiene " .$alumno["edad"] . " años y ha sacado un " .$alumno["nota"]."<br>";

    echo "<h4>3. Arrays MULTIDIMENSIONALES</h4>";

    //Son arrays que contienen otros arrays. Permiten representar colecciones de registros.
    $alumnos = [
        ["nombre" => "Lucía", "nota" => 8],
        ["nombre" => "Pablo", "nota" => 6],
        ["nombre" => "Marta", "nota" => 9],
    ];
    echo "<pre>";
    print_r($alumnos);
    echo "</pre>";

    echo "El nombre del alumn@ en la posición \$alumnos[1]['nombre'] es: ". $alumnos[1]["nombre"]."<br>";
    echo "La nota del alumn@ en la posición \$alumnos[2]['nota'] es: ". $alumnos[2]["nota"]."<br>";
