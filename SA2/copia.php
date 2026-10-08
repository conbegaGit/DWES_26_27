<?php
/* En este código se prueban asignaciones por copia y por referencia.
Las asignaciones por copia son las copias clásicas: si haces $a = $b, la variable b pasa a
tener el mismo valor que a pero, si se modifica a, b no cambia.
Las asignaciones por referencia hacen lo contrario a esto, es como crear un vínculo entre
las variables. Si haces $a = &$b, esto hace que la variable b apunte a la misma dirección 
de memoria que la variable a, son dos nombres para el mismo dato. Da igual cuál de las dos
intentes modificar, ambas se modifican porque apuntan al mismo dato. */

$original = "Hola";
$copia = $original;
$referencia = &$original;

echo "$original, $copia, $referencia<br>"; // Aquí todas muestran el mismo mensaje, no ha habido modificaciones
$referencia = "Adios";
echo "$original, $copia, $referencia<br>"; // Muestra Adios, Hola, Adios: ha cambiado el valor al que apuntan original y referencia
$copia = "Buenas";
echo "$original, $copia, $referencia<br>"; // Muestra Adios, Buenas, Adios: solo ha cambiado la copia
unset ($referencia); // Deshace la referencia
$referencia = "Bye bye"; // Añade un valor nuevo a la variable para comprobar si sigue referenciando
echo "$original, $copia, $referencia"; // Muestra Adios, Buenas, Bye bye: la referencia se ha deshecho, ahora cada variable tiene su valor

/* Cuando deshaces la referencia, la variable que metes en unset() se queda vacía, mientras que la otra sigue apuntando al mismo punto en memoria que antes.
Esto implica que puedes crear una variable con un valor, hacerle referencia con otra y, metiendo en unset() la primera variable, esta se quedaría vacía. */

?>