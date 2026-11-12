<?php

echo "<h4>CALCULADORA</h4>";

$num1 = 123456;
$num2 = 789;

try {
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new InvalidArgumentException("Los valores deben ser numéricos.");
    }

    if ($num2 == 0) {
        throw new DivisionByZeroError("No se puede dividir por cero.");
    }

    $resultado = $num1 / $num2;
    echo "<p>Resultado división: " . $resultado . "</p>";

} 

catch (InvalidArgumentException $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
} 

catch (DivisionByZeroError $e) {
    echo "<p>Error: " . $e->getMessage() . "</p>";
}
finally {
    echo "<p>Fin de la calculadora.</p>";
}