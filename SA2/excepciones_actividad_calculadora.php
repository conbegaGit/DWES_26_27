<?php

echo"<h4>Calculadora</h4>";

$a = 20;
$b = 0;

try{
    if(!is_numeric($a)||!is_numeric($b)){
        throw new InvalidArgumentException("Los valores deben ser numéricos.");
    }
    if($b==0){
        throw new DivisionByZeroError("No se puede dividir entre cero.");
    }
    echo"<p>Resultado: " . ($a/$b) . "</p>";

}catch(InvalidArgumentException $e){
    echo"<p>Error de introducción de datos: " . $e->getMessage() . "</p>";  
}catch(DivisionByZeroError $e){
    echo"<p>Error matemático: " . $e->getMessage() . "</p>";  
}finally{
    echo"<p>Fin del bloque</p>";
}