<?php
// Las variables no inicializadas valen null y dan un Warning "Undefined variable",
// pero en operaciones numéricas se toman como 0 y el script sigue.
$var1 = 100;
/** @disregard */
$var3 = $var1 + $var2; //var2 no existe, se toma como 0.
echo "$var3<br>"; //muestra 100.
/** @disregard */
$var3 = $var1 * $var2; //var2 no existe, se toma como 0.
echo "$var3<br>"; //muestra 0.

// Con cadenas no numéricas es distinto: es un error fatal y el script se detiene.
/** @disregard */
$var4 = "HolaMundo" + $var2; // Fatal error: Uncaught TypeError: Unsupported operand types: string + null
echo $var4; // no llega a ejecutarse
