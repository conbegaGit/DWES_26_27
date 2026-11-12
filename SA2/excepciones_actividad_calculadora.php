<?php

echo "<h4>CALCULADORA</h4>";

$numero1 = 20;
$numero2 = 0;

try {
    if (!s_numeric($numero1) || (!is_numeric($numero2))) {
        throw new InvalidArgumentException("ojo")
    }

    if ($numero2 == 0) {
        throw new DivisionByZeroError("No puedes dividir entre 0");
    }

    $resultado = $numero1/$numero2;

    echo "<p>Resultado: $resultado</p>";

}catch (InvalidArgumentException $e) {

    echo "<p>Error de datos: "
        . $e->getMessage() . "</p>";
}catch (DivisionByZeroError $e) {
    
}

