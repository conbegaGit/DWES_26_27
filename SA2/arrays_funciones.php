<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4>1. Comprobar si existe un valor: in_array</h4>";
        // basicamente mira si en el array esta el valor que le das dentro del array => in_array("valor que buscas", $array, indicar si tiene que ser identico(bool))

        $lenguajes = ["PHP", "Java", "Python"];

        if(in_array("PHP", $lenguajes)){
            echo "El lenguaje existe";
        }else{
            echo "El lenguaje no existe";
        }
        echo "<pre>";
        // El tercer argumento de in_array() permite exigir una comparacion
        // estricta de tipo y valor

        $numeros = [1, 2, 3];
        var_dump(in_array("2", $numeros, true)); // es false, el var_dump es como un print

        echo "<h4>2. Calcular la media de unas notas</h4>";

        $notas = [7, 8, 5, 9, 6];

        $media = array_sum($notas) / count($notas);
        // array_sum($array) coge todos los contenidos del array y los suma
        // como ya sabemos count($array) muestra el numero de elementos que posee el array en ese preciso momento
        echo "La media es: $media"; // en este caso sera 7

        // Si el array llegase a estar vacio array_sum() devolvera 0 entonces,
        // debemos tener cuidado al querer hacer la media porque no se puede dividir entre 0

        echo "<h4>3. Ordenar un array</h4>";
        // sort($array) ordena los valores y renumera las claves numericas
        // asort() ordena valores y conserva las claves
        // ksort() ordena por clave

        $notas = [8,5,9,6];
        sort($notas);
        print_r($notas);


        $precios = [
            "raton" => 25,
            "teclado" => 10,
            "monitor" => 150
        ];
        asort($precios); // Ordena por valor y conserva las claves
        echo "<br>";
        print_r($precios);

        echo "<h4>4. Filtrar elementos con array_filter()</h4>";

        $notas = [4 ,7 ,3 ,9 ,5 ,2];

        echo "<h4>6. Mostrar los datos en una tabla HTML</h4>";
        $alumnos = [
            ["nombre" => "Lucía", "nota" => 6],
            ["nombre" => "Jeremy Gabriel", "nota" => 10],
            ["nombre" => "Pedro Sanchez", "nota" => 100]
        ];
        echo "<table border='1'>";
        echo "<tr><th>Nombre</th><th>Nota</th></tr>";
        foreach($alumnos as $alumno) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($alumno["nombre"]) ."</td>";
            echo "<td>" . $alumno["nota"] ."</td>";
            echo "</tr>";
        }
    ?>
</body>
</html>