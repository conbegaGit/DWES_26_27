
<?php

    echo "<h1>Ficha alumno</h1>";

    $nombre = "Hejun Wang";
    $edad = "20";
    $curso = "2GS DAM";

    // 1. Comillas dobles
    echo "<h2>Información del alumno</h2>";
    echo "Nombre: $nombre <br>";
    echo "Edad: $edad <br>";

    // 2. Comillas simples
    echo 'Curso: ' . $curso . '<br>';

    // 3. Concatenación con el operador .
    echo "Alumno: " . $nombre . " - Curso: " . $curso . "<br>";

    // 4. Mostrar literalmente el nombre de una variable
    echo 'La variable se llama $nombre';
?>
