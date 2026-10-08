<?php
/* declaración de variables */
$entero = 4; // tipo integer
$numero = 4.5; // tipo coma flotante
$cadena = "cadena"; // tipo cadena de caracteres
$bool = TRUE; //tipo booleano
/* cambio de tipo de una variable */
$a = 5; // entero
echo "El tipo de dato de \$a es:" . gettype($a) ;
echo "<br>" ;
$a = "Hola"; // cambia a cadena
echo "El tipo de dato de \$a es:" . gettype($a) ;