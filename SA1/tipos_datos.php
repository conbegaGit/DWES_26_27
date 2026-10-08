<?php 
/* declaración de variables */ 
$entero = 4; // tipo integer (faltaba el signo =)
$numero = 4.5; // tipo coma flotante 
$cadena = "cadena"; // tipo cadena de caracteres
$bool = TRUE; // tipo booleano 

/* cambio de tipo de una variable */ 
$a = 5; // entero 
echo 'Tipo de dato variable $a inicial: ' . gettype($a); // imprime el tipo de dato de a 
echo "<br>";

$a = "Hola"; // cambia a cadena
echo  'Tipo de dato variable $a final: ' . gettype($a); // se comprueba que ha cambiado 
?>

