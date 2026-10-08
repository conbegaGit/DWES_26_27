<?php 

//Las constantes se definen con define(nombre, valor). El dato que almacenan nunca cambia.
define ("LIMITE", 100);
define ("USUARIO", "Marcos");

// Si intentases modificar las constantes te dará un error. Son constantes, no se pueden modificar.
$saldo = 400;
echo "Hola, " . USUARIO . ", tienes " . $saldo . "€ en tu cuenta. El límite establecido para sacar dinero en este cajero es de " . LIMITE . "€.";
// Para poder imprimir variables o usarlas como parte de una cadena, no puede ir dentro de las comillas
$pruebanum = LIMITE + 50; // Usa correctamente el valor de la constante para operaciones
$pruebacadena = USUARIO . " 2ºDAM"; // Usa correctamente la cadena de la constante y se puede leer, concatenar, etc.
echo "<br><br>Valor de \$pruebanum = $pruebanum<br>
Valor de \$pruebacadena = $pruebacadena";

?>