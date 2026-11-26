<?php 
//doble si ejecuta con simple no 

$var = "Paco";
$a = "Hola $var <br>"; 
$b = 'Hola $var'; 
echo $a; //con comillas dobles, se interpreta la variable e imprime bien
echo $b; //con comillas simples, no se interpreta la variable y se imprime tal cual (mal)

?>

