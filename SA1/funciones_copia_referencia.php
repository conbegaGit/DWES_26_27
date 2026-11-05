<?php

echo "<h4>1. Paso de argumentos por valor</h4>";
// Es el comportamiento predeterminado de PHP.

function modificarNumero($numero) {
    $numero = 100;
    echo "<p>Dentro de la función: $numero</p>";
}

$valor = 10;

echo "<p>Antes: $valor</p>";
modificarNumero($valor);
echo "<p>Después: $valor</p>";

echo "<h4>2. Paso de argumentos por referencia</h4>";
// Para pasar una variabvle por referencia utilizamos el símbolo & delante del parametro de la función.

function ModificarNumeroRef(&$numero) {
    $numero = 100;
    echo "<p>Dentro de la función: $numero</p>";
}

$valor = 10;

echo "<p>Antes: $valor</p>";
ModificarNumeroRef($valor);
echo "<p>Después: $valor</p>";

?>