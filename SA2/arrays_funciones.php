<?php

    echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

    $lenguajes = ["PHP", "Java", "Python"];

    if (in_array("PHP", $lenguajes)) {
        echo "El lenguaje";
    }
    else{
        echo "El módulo no existe";
    }
    echo "<br>";

    $numeros = [1, 2, 3];
    var_dump(in_array("2", $numeros, true));



    echo "<h4>2. Calcular la media de unas notas</h4>";

    $notas = [7, 8, 5, 9, 6];
    $media = array_sum($notas) / count($notas);

    echo "La media es: ".$media; //7

    echo"<h4>3. Ordenar un array</h4>";

    $notas = [8, 5, 9, 6];
    sort($notas);
    echo "<pre>";
    print_r($notas); // [5, 6, 8, 9]
    echo "</pre>";

    echo "<br>";

    $precios = [
        "raton" => 10,
        "teclado" => 20,
        "monitor" => 150
    ];

    asort($precios);
    echo "<pre>";
    print_r($precios);
    echo "</pre>";



    echo "<h4>4. Filtrar elementos por array_filter</h4>";

    $notas = [4, 7, 3, 9, 5, 2];

    $aprobados = [
        $notas,
        function ($nota) {
            return $nota >= 5;
        }
    ];  


    

    echo "<h4>6. Mostrar elementos enuna tabla HTML</h4>";
    
    $alumnos = [
        [
            "nombre" => "Lucía", "nota" => 8
        ],
        [
            "nombre" => "Pablo", "nota" => 4
        ],
        [
            "nombre" => "Marta", "nota" => 9
        ]
    ];

    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Nota</th></tr>";

    foreach ($alumnos as $alumno){
        echo "<tr>";
        echo "<td>".htmlspecialchars($alumno["nombre"])."</td>";
        echo "<td>".htmlspecialchars($alumno["nota"])."</td>";
        echo "</tr>";
    }
    echo "</table>";
