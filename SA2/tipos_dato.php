<?php
/* declaración de variables */
$entero = 4; //int
$numero = 4.5; //float
$cadena = "Hola Mundo"; //string
$bool = true; //boolean
/* cambio de tipo de variable */
$a = 5; //entero
echo "El tipo de dato inicial de la variable \$a es: " . gettype($a) . "<br>"; // Imprime el tipo de dato de $a. Poner la \ antes de la variable la muestra como texto, no la interpreta.
$a = "Hola Mundo"; //cambio a string
echo "El tipo de dato final de la variable \$a es: " . gettype($a); //se comprueba que el tipo de dato ha cambiado a string.
