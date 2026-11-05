<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones copia referencia</title>
</head>
<body>
    <?php
    echo "<h4>1. Paso de argumentos por valor</h4>";
    //es el comportamiento por defecto de PHP.

    function modificarNumero($numero){
        $numero = 100;
        echo "<p>Dentro de la función: $numero</p>";
    }

    $valor = 10;

    echo "<p>Antes: $valor</p>";
    modificarNumero($valor);
    echo "<p>Después: $valor</p>";

    echo "<h4>2. Paso de argumentos por referencia</h4>";
    //para pasar un argumento por referencia, se utiliza el
    //símbolo & delante del nombre del parámetro en la definición de la función.

    function modificarNumeroRef(&$numero){
        $numero = 100;
        echo "<p>Dentro de la función: $numero</p>";
    }

    $valor = 10;

    echo "<p>Antes: $valor</p>";
    modificarNumeroRef($valor);
    echo "<p>Después: $valor</p>";
    ?>
</body>
</html>