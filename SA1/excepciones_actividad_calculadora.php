<?php

echo "<h4>Actividad: Calculadora</h4>";

$num1 = 10;
$num2 = 5;


try{
    if(!is_numeric($num1) || !is_numeric($num2)){
        throw new InvalidArgumentException("Los valores deben ser numéricos");
    }

    if($num2 == 0){
        throw new DivisionByZeroError("No se puede dividir por cero");
    }

    $resultado = $num1 / $num2;

    
    echo "<p>El resultado de la división es: $resultado</p>";
} catch (InvalidArgumentException $e) {
    echo "<p>Error de datos: " . $e->getMessage() . "</p>";
} catch (DivisionByZeroError $e) {
    echo "<p>Error de división: " . $e->getMessage() . "</p>";
}finally {
    echo "<p>Fin de la calculadora.</p>";
}

