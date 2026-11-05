<?php

echo "<h4>1. Longitud de una cadena</h4>";

//Strlen(): Obtener la lolngitud de una cadena.
//Devuelve el número de bytes de una cadena.

$nombre = "Consu";

$longitud = strlen($nombre);

echo "<p>Nombre: $nombre</p>";
echo "<p>Número de caracteres: $longitud</p>";




echo "<h4>2. Transformar cadenas</h4>";

//strtoupper() y strtolower(): Cambiar mayúsculas y minúsculas

$texto = "Hola alumno de DAM";

echo "<p>Texto original: $texto</p>";

echo "<p>Texto en mayúsculas: " . strtoupper($texto) . "</p>";
echo "<p>Texto en minúsculas: " . strtolower($texto) . "</p>";





echo "<h4>3. Sustituir texto</h4>";

//str_replace(): Sustituir parte de una cadena.

$frase = "Estoy estudiando JAVA";

$nuevaFrase = str_replace("JAVA", "PHP", $frase);

echo "<p>Frase original: $frase</p>";
echo "<p>Frase modificada: $nuevaFrase</p>";





echo "<h4>4. Extraer texto</h4>";

//substr(): Extraer una parte de una cadena.

$frase = "Estoy estudiando PHP";

$parte = substr($frase, 0, 10);

echo "<p>Frase original: $frase</p>";
echo "<p>Parte extraída: $parte</p>";
