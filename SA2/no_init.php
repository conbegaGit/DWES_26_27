<?php

// Usar variables sin asignar valores muestra un error pero no interrumpe la ejecución, lo toma como advertencia
$var1 = 100;
$var2 = $var1 + $casper; // casper no existe, la toma como si fuera 0 -> 100 + 0 = 100.
echo "$var2<br>";

// Probando con cadenas
$var1 = "Hola";
$var2 = $var1 . $casper; // casper sigue sin existir, no concatena nada a la cadena
echo "$var2<br>"; // Devuelve el texto de var2, que solo es lo mismo que var1, la variable casper la ha ignorado al concatenar
$var3 = ", adiós.";
$var2 = $var1 . $casper . $var3; // una vez más, casper no existe, la ignora y concatena var1 y var3
echo "$var2"; // Devuelve var1 y var3 concatenadas, la variable casper la ha ignorado de nuevo al concatenar

?>