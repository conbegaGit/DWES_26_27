<?php

echo "<h4>1. Longitud de una cadena</h4>";

//strlen(): Obtener la longitud de una cadena
//Devuelve el número de bytes de una cadena.

$nombre = "Consu";

$longitud = strlen($nombre);

echo "<p>Nombre: $nombre</p>";
echo "<p>Núemro de caracteres: $longitud</p>";

echo "<h4>2. Transformar cadenas</h4>";

//strtoupper() y strtolower(): Cambiar mayúsculas y minúsculas

$texto = "Hola alumnado de DAM";

echo "<p>Original: $texto</p>";
echo "<p>Mayúsculas: " . strtoupper($texto) . "</p>";
echo "<p>Minúsculas: " . strtolower($texto) . "</p>";

echo "<h4>3. Sustituir texto</h4>";

// str_replace(): Sustituir una parte de una cadena

$frase = "Estoy estudiando Java";

$nuevaFrase = str_replace("Java", "PHP", $frase);

echo "<p>Frase original: $frase</p>";
echo "<p>Frase modificada: $nuevaFrase</p>";

echo "<h4>4. Extraer texto</h4>";

// substr(): Extraer una parte de una cadena

$texto = "Programación PHP";

$parte = substr($texto, 0, 11);

echo "<p>Tetxo original: $texto</p>";
echo "<p>Texto extraído: $parte</p>";

// El segundo argumento indica la posición inicial
// y el tercero cuántos caracteres (bytes) queremos extraer.

?>