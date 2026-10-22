<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador Identico</title>
</head>
<body>
    <?php
    $a = 3;
    $b = "3";
    if($a == $b){ //al comprar con ==, PHP convierte el tipo de dato de la variable para poder compararlas, por eso en este caso son iguales
        echo "Son iguales";
    } else {
        echo "No son iguales";
    }
    echo "<br>";
    if($a === $b){ //al comparar con ===, PHP compara el valor y el tipo de dato, por eso en este caso no son iguales
        echo "Son idénticos";
    } else {
        echo "No son idénticos";
    }
    ?>
</body>
</html>