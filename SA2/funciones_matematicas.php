<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4>1. Redondear números</h4>";
        // round(): Redondear un número
        // a partir del 5 redondea hacia arriba

        $numero = 7.856;
        // $numero2 = 7.325;
        echo "<p>Número original: $numero</p>";
        echo "<p>Redondeado: " . round($numero). "</p>";
        echo "<p>Dos decimales: " . round($numero, 2) . "</p>";

        // echo "<p>Número original: $numero2</p>";
        // echo "<p>Redondeado: " . round($numero2). "</p>";
        // echo "<p>Dos decimales: " . round($numero2, 2) . "</p>";

        echo "<h4>2. Número aleatorio</h4>";
        // rand(), genera un numero aleatorio entre el rango establecido
        // si no se ha establecido ningun rango pilla un numero aleatorio entre el rango predeterminado
        // de Integer_MIN_VALUE <--> Integer_MAX_VALUE
        $numero = rand(1, 10);
        echo "<p>Número generado $numero</p>";


        echo "<h4>3. Máximo y mínimo</h4>";
        // max() y min(): Obtener el máximo y el mínimo

        $notas = [7, 9, 5, 8, 6];

        echo "<p>Nota máxima: " . max($notas) . "</p>";
        echo "<p>Nota mínima: " . min($notas) . "</p>";
    ?>
</body>
</html>