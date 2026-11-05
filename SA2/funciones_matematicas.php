<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones matematicas</title>
</head>
<body>
    <?php
    echo "<h4>1. Redondear un número</h4>";
    //round(): redondea un número al entero más cercano

    $numero = 7.856;
    echo "<p>Número original: $numero</p>";
    echo "<p>Número redondeado: " . round($numero) . "</p>";
    echo "<p>Número redondeado a 2 decimales: " . round($numero, 2) . "</p>";

    echo "<h4>2. Número aleatorio</h4>";
    //rand(): genera un número aleatorio entre dos valores

    $numero = rand(1, 10);
    echo "<p>Número generado: $numero</p>";
    //Cada vez que recargamos la página, se generará un nuevo número aleatorio

    echo "<h4>3. Máximo y mínimo</h4>";
    //max() y min(): Obtener el valor máximo y mínimo

    $notas = [7, 8, 5, 9, 6];
    echo "<p>Nota máxima: ". max($notas) . "</p>";
    echo "<p>Nota mínima: ". min($notas) . "</p>";
    ?>
</body>
</html>