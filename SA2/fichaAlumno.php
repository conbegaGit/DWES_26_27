<?php
echo "<h2>Ficha del alumno</h2>";

//Tipo html separando las líneas

//Nombre usando 2 cadenas de comillas dobles
$nombre = "Consu";
$ape = "Benavent";
echo "Nombre: $nombre $ape<br>";

// Edad usando concatenación con .
$edad = 46;
echo "Edad: " . $edad . " años<br>";

//Ciclo impreso normal
echo "Ciclo: 2GS DAM<br>";

//Comillas simples para no interpretar la variable
echo 'la varibale $nombre contiene el nombre del alumno';