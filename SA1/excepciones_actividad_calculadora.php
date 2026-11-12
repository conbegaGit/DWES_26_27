<?php
    echo "<h4>Calculadora</h4>";

    // Comprobar si es número
    // No se puede dividir entre cero

    try {
        $num1 = 10;
        $num2 = 0;

        if (!is_numeric($num1) || !is_numeric($num2)) {
            throw new Exception("Los valores deben ser numéricos");
        }

        if ($num2 == 0) {
            throw new Exception("No se puede dividir entre cero");
        }

        $resultado = $num1 / $num2;
        echo "<p>Resultado: $resultado</p>";
    } catch (Exception $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }

?>
