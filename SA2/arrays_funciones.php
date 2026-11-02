<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays funciones</title>
</head>
<body>
    <?php
    echo "<h4>2. Calcular la media de unas notas</h4>";
    $notas = [7, 8, 5, 9, 6];
    $media = array_sum($notas) / count($notas);
    echo "La media de las notas es: ".$media."<br>";
    //aray_sum() suma los valores. Si el array puede estar vacío
    //Hay que comprobarlo antes de dividir para evitar una división entre cero
    //p.e. con count($notas) > 0)
    echo "<h4>3. Ordenar un array</h4>";
    //sort($array) ordena los valores y remunera las claves numéricas
    //asort($array) ordena los valores conservando las claves
    //ksort($array) ordena por clave
    $notas = [8, 5, 9, 6];
    sort($notas);
    print_r($notas); //[5, 6, 8, 9]

    echo "<br>";
    $precios = [ "raton" => 25, "teclado" => 10, "monitor" => 150];
    asort($precios); //Ordena por valor, conservando las claves
    print_r($precios); //["teclado" => 10, "raton" => 25, "monitor" => 150]

    echo "<h4>4. Filtrar elementos con array_filter</h4>";
    $notas = [4, 7, 3, 9, 5, 2];
    $aprobadas = array_filter($notas, function($nota) {
        return $nota >= 5;
    });
    print_r($aprobadas); //[7, 9, 5]

    echo "<h4>6. Mostrar los datos en una tabla HTML</h4>";
    $alumnos = [
        ["nombre" => "Lucía", "nota" => 8],
        ["nombre" => "Pablo", "nota" => 4],
        ["nombre" => "Marta", "nota" => 9]
    ];
    echo "<table border='1'>";
    echo "<tr><th>Nombre</th><th>Nota</th></tr>";

    foreach ($alumnos as $alumno){
        echo "<tr>";
        echo "<td>" . htmlspecialchars($alumno["nombre"]) . "</td>";
        echo "<td>" . $alumno["nota"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    //htmlspecialchars() ayuda a evitar que el texto se interprete como código HTML cuando se muestra en una página.
    ?>
</body>
</html>