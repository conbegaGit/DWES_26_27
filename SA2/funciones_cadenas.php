<?php
echo"<h4>1. Longitud de una cadena</h4>";
$cadena = "Penelope";
$longitud = strlen($cadena);
// strlen () : Obtener la longitud de una cadena
// Devuelve el número de bytes de una cadena
echo"<p>Nombre : $cadena</p>";
echo"<p>Número de caracteres: $longitud</p>";

echo"<h4>2. Transformar cadenas</h4>";

// strtoupper() y strtolower() : Cambiar mayúsculas y minúsculas
$texto = "Hola Alumnado de DAM";

echo "<p>Texto original: $texto</p>";
$mayusculas = strtoupper($texto);
echo "<p>Texto en mayúsculas: $mayusculas</p>";
$minusculas = strtolower($texto);
echo "<p>Texto en minúsculas: $minusculas</p>";

echo"<h4>Sustituir Texto</h4>";
// str_replace() : Sustituir una parte de una cadena
$texto = "Estoy estudiando Java";
echo "<p>Texto original: $texto</p>";
$texto_reemplazado = str_replace("Java", "PHP", $texto);
echo "<p>Texto después del reemplazo: $texto_reemplazado</p>";
echo"<h4>4. Extraer texto</h4>";
// substr() : Extraer una parte de una cadena
$texto = "Programación PHP";
echo "<p>Texto original: $texto</p>";
$parte_texto = substr($texto, 0, 11);
echo "<p>Primera parte del texto: $parte_texto</p>";