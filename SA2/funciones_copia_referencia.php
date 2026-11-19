<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
        echo "<h4> 1. Paso de argumentos por valor</h4>";
        // es el comportamiento predeterminado de PHP

        function modificarNumero($numero) {
            $numero = 100;
            echo "<p>Dentro de la función: $numero</p>";
        }

        $valor = 10;

        echo "<p>Antes: $valor</p>";
        modificarNumero($valor);
        echo "<p>Despues: $valor</p>";

        echo "<h4>2. Paso de argumentos por referencia</h4>";

        // Para pasar una variable or referencia
        // utilizamos el símbolo & delante de parametro de la función

        function modificarNumeroRef(&$numero) {
            $numero = 100;
            echo "<p>Dentro de la función: $numero</p>";
        }

        $valor = 10;

        echo "<p>Antes: $valor</p>";
        modificarNumeroRef($valor);
        echo "<p>Despues: $valor</p>";
        
    ?>
</body>
</html>