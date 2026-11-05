<?php

echo "<h4>1. Paso de argumentos por valor</h4>";
//Es el comportamiento predeterminado de PHP.


function modificarNumero($numero){
    $numero = 100;
    echo "<p>Dentro de la función: $numero</p>";
}


$valor = 10;

echo "<p>Antes del valor</p>";
modificarNumero($valor);
echo "<p>Después: $valor</p>";




echo "<h4>2. Paso de argumentos por referencia</h4>";

//Para pasar una variable por referencia utilizamos el símbolo & delante del parámetro de la función.

function modificarNumeroRef(&$numero){
    $numero = 100;
    echo "<p>Dentro de la función: $numero</p>";
}

$valor = 10;

echo "<p>Antes del valor</p>";
modificarNumeroRef($valor);
echo "<p>Después: $valor</p>";