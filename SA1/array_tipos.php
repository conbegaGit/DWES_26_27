<?php
    echo "<h3>TIPOS DE ARRAYS</h3>";
    echo "<h4>1. Arrays INDEXADOS</h4>";

    // Cada elemento se identifica mediante un índice númerico.
    $colores = ["rojo", "verde", "azul"];
    echo "<pre>";
        print_r($colores);
    echo "</pre>";

    echo "El color en \$colores[0] es: " . $colores[1] . "<br>";

    echo "<h4>2. Arrays ASOCIATIVOS</h4>";
    $alumno = [
        "nombre" => "Lucía",
        "edad" => "20",
        "nota" => 8.5
    ];
    echo "<pre>";
        print_r($alumno);
    echo "</pre>";

    echo "El alumno se llama: " . $alumno["nombre"] .", tiene " . $alumno["edad"] . " años y ha sacado un: " . $alumno["nota"] . "<br>";

    echo "<h4>3. Arrays MULTIDIMENSIONALES</h4>";
    $alumnos = [
        ["alumnos" => "Lucía", "nota" => 8],
        ["alumnos" => "Pablo", "nota" => 6],
        ["alumnos" => "Marta", "nota" => 9]
];
    echo "<pre>";
        print_r($alumnos);
    echo "</pre>";

    echo "El nombre del alumn@ en la posición \$alumnos[1]['alumnos'] es: " . $alumnos[1]["alumnos"] . "<br>";
    echo "La nota del alumn@ en la posición \$alumnos[2]['nota'] es: " . $alumnos[2]["nota"] . "<br>";
?>