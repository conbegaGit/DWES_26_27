<?php
# El operador Idéntico no está disponible en todos los lenguajes.
# Compara que dos expresiones tengan el mismo valor y el mismo tipo de dato.
$a = 7;
$b = "7";
if ($a == $b) { # Dirá que son iguales porque tienen el mismo valor.
    echo "Son iguales<br>";
} else {
    echo "No son iguales<br>";
}

if ($a === $b)  { # Dirá que no son idénticos, pues son un entero y una cadena.
    echo "Son idénticos<br>";
} else {
    echo "No son idénticos<br>";
}
?>