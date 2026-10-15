<?php
$var = "Marc";
$a = "Hola $var <br>"; //se interpreta la variable
$b = 'Hola $var'; //no se interpreta la variable
echo $a;
echo $b;