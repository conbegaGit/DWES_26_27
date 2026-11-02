<?php
    echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

    $lenjuajes = ["PHP", "Java", "Python"];

    if (in_array("PHP", $lenjuajes)){
        echo "El lenguaje existe";
    } else{
        echo "El modilo no existe";
    }

    echo "<h4>2. Comprobar si existe un valor: array_search</h4>";
    $posicion = array_search("PHP", $lenjuajes);
    if ($posicion !== false){
        echo "El lenguaje existe en la posición $posicion";
    } else{
        echo "El lenguaje no existe";
    }

    echo "<h4>3. Ordenar un array: sort</h4>";
    sort($lenjuajes);
    foreach ($lenjuajes as $lenguaje) {
        echo "$lenguaje<br>";
    }

    $alumnos = [
        ["nombre" => "Juan", "nota" => 8],
        ["nombre" => "María", "nota" => 9],
        ["nombre" => "Pedro", "nota" => 7]
    ];

    echo "<h4>6. Mostrar los datos de una tabla HTML: </h4>";
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Nota</th></tr>";
    foreach ($alumnos as $alumno) {
        echo "<tr>";
        echo "<td>" . $alumno["nombre"] . "</td>";
        echo "<td>" . $alumno["nota"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";