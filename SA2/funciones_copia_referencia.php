<?php
    echo "<h4>1. Paso de argumentos por valor</h4>";

        function modificarValor($numero){
            $numero = 100;
            echo "<p>Dentro de la función: $numero</p>";
        }

        $valor = 10;

        echo "<p>Antes: $valor</p>";
        modificarValor($valor);
        echo "<p>Después: $valor</p>";

    echo "<h4>2. Paso de argumentos por referencia</h4>";

        function modificarValorPorReferencia(&$numero){
            $numero = 100;
            echo "<p>Dentro de la función: $numero</p>";
        }

        $valor = 10;

        echo "<p>Antes: $valor</p>";
        modificarValorPorReferencia($valor);
        echo "<p>Después: $valor</p>";
