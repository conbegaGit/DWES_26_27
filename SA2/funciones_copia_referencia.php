<?php

echo"<h4>1. Paso de argumentos por valor</h4>";
function modificarNumero($numero){
    $numero=100;
    echo"<p>Dentro de la función: $numero</p>";
}
$valor =10;
echo"<p>Antes: $valor</p>";
modificarNumero($valor );
echo"<p>Después: $valor</p>";

echo"<h4>2. Paso de argumentos por referencia</h4>";

// para pasar una variable utilizamos &

function modificarNumeroRef(&$numero){
    $numero=100;
    echo"<p>Dentro de la función: $numero</p>";
}
$valor =10;
echo"<p>Antes: $valor</p>";
modificarNumeroRef($valor ); 
echo"<p>Después: $valor</p>";