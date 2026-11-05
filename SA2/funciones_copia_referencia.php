<?php

echo "<h4>1. Paso de argumentos por valor</h4>";

function modificarNumero($numero) {
    $numero=100;
    echo "<p>Dentro de la función: $numero</p>";
}

$valor = 50;

echo "<p>Antes : $valor</p>";
modificarNumero($valor);
echo "<p>Después: $valor</p>";


echo "<h4>2. Paso de argumentos por referencia</h4>";

function modificarNumeroReferencia(&$numero) {
    $numero=100;
    echo "<p>Dentro de la función: $numero</p>";
}

$valor = 50;

echo "<p>Antes : $valor</p>";
modificarNumeroReferencia($valor);
echo "<p>Después: $valor</p>";
