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
    ?>
</body>
</html>