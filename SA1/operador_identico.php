<?php
$a = 3;
$b = "3";
if($a == $b){
    echo "Son iguales <br>";
}else{
    echo "No son iguales <br>";
}
// Fijate en los operadores de comparación, el operador == compara los valores, mientras que el operador === compara tanto el valor como el tipo de dato. En este caso, $a es un entero y $b es una cadena, por lo que no son idénticos.
if($a === $b){
    echo "Son idénticos <br>";
} else {
    echo "No son idénticos <br>";
}
