<?php

    echo "<h4>CALCULADORA</h4>";

    /*
    1. Comprobar si es número
    2. No se puede dividir entre cero
    */

    $num1 = 10;
    $num2 = 5;

   try {

        if (!is_numeric($num1) || (!is_numeric($num2))) {
            throw new InvalidArgumentException(
                "Los valores deben ser numéricos"
            );
        }

        if ($num2 == 0) {
            throw new DivisionByZeroError(
                "No se puede dividir entre cero"
            );
        }

        $resultado = $num1 / $num2;
        echo "<p>RESULTADO: " . $resultado .  "</p>";

   } catch (InvalidArgumentException $e) {
        echo "<p>Error de datos: " . $e->getMessage() . "</p>";

   } catch (DivisionByZeroError $e) {
        echo "<p>Error de datos: " . $e->getMessage() . "</p>";
        
   } finally {
    echo "<p>Calculadora finalizada</p>";
   }

?>

