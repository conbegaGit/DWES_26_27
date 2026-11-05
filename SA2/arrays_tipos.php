<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h3>TIPOS DE ARRAYS</h3>";
        echo "<h4>1. Arrays INDEXADOS</h4>";
        // cada elemento se identifica mediante un indice numerico
        $colores = ["rojo", "verde", "azul"];
        echo "<pre>";
        print_r($colores);
        echo "<pre>";
        echo "El color en \$colores[1] es: $colores[1].<br>";

        echo "<h4>1. Arrays ASOCIATIVOS</h4>";
        // cada elemento se dientifica mediante una clave elegida por el desarrollador
        $alumno = [
            "nombre" => "Jeremy",
            "edad" => 19,
            "nota" => 8.5
        ];
        echo "<pre>";
        print_r($alumno);
        echo "<pre>";
        echo "El alumno se llama $alumno[nombre], tiene $alumno[edad] años y ha sacado $alumno[nota] sobre 10.<br>";
        
        echo "<h4>1. Arrays MULTIDIMENSIONALES</h4>";
        // basicamente crear una matriz. Arrays que contienen otros arrays

        $alumnos =[
            ["nombre" => "Jeremy", "edad" => 19, "nota" => 8.5],
            ["nombre" => "Lucia", "edad" => 80, "nota" => 5.0],
            ["nombre" => "Pedro Sanchez", "edad" => 55, "nota" => 3.5]
        ];
        echo "<pre>";
        print_r($alumnos);
        echo "<pre>";
        echo "El alumno de la posicion \$alumno[0] se llama ". $alumnos[0]["nombre"].".<br>";
        echo "Y su nota es: ". $alumnos[0]["nota"].".<br>";
        echo "El alumno de la posicion \$alumno[1] se llama ". $alumnos[1]["nombre"].".<br>";
        echo "Y su nota es: ". $alumnos[1]["nota"].".<br>";
        echo "El alumno de la posicion \$alumno[2] se llama ". $alumnos[2]["nombre"].".<br>";
        echo "Y su nota es: ". $alumnos[2]["nota"].".<br>";
    ?>
</body>
</html>