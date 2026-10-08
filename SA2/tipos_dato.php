<?php
/* declaración de variables */
$entero = 4; // tipo integer
$numero = 4.5; // tipo coma flotante
$cadena = "cadena" ; // tipo cadena de caracteres
$bool = TRUE; //tipo booleano
/* cambio de tipo de una variable */
$a = 5; // entero
echo "El tipo de dato inicial de la variable \$a es: " .gettype($a); // imprime el tipo de dato de a. 
//Poner la \ antes de la variable la muestra como texto, no la interpreta.
echo "<br>" ;
$a = "Hola"; // cambia a cadena
echo "El tipo de dato final de la variable \$a es: " .gettype($a); // se comprueba que ha cambiado