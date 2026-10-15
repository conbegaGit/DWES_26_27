<?php
$var1 = 100;
/** @disregard */
$var3 = $var1 + $var2; //var2 no existe, se toma como 0.
echo "$var3<br>"; //muestra 100.
/** @disregard */
$var3 = $var1 * $var2; //var2 no existe, se toma como 0.
echo "$var3<br>"; //muestra 0.
/** @disregard */
$var4 = "HolaMundo" + $var2; //no funciona, no se puede sumar un string con un null.
