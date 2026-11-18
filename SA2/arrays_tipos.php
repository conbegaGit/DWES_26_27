<?php
echo "<h3>TIPOS DE ARRAYS</h3>";
echo "<h4>1. Arrays INDEXADOS</h4>";
//Cada elemento se identifica mediante un índice numérico.
$colores = ["rojo", "verde", "azul"];
echo "<pre>";
print_r($colores);
echo "</pre>";

echo "El color en \$colores[1] es: $colores[1]";

echo "<h4>2. Arrays ASOCIATIVOS</h4>";
//Cada elemento se identifica mediante una clave elegida por nosotros.

$alumno = [
    "nombre" => "Lucía",
    "edad" => 20,
    "nota" => 8.5
];
echo "<pre>";
print_r($alumno);
echo "</pre>";

// Concatenando:
echo "El alumno se llama ".$alumno["nombre"].", tiene ".$alumno["edad"]." años y ha sacado un ".$alumno["nota"]."<br>";
// Dentro de comillas dobles también se puede, escribiendo la clave SIN comillas:
echo "El alumno se llama $alumno[nombre], tiene $alumno[edad] años y ha sacado un $alumno[nota] sobre 10.<br>";

echo "<h4>3. Arrays MULTIDIMENSIONALES</h4>";
//Son arrays que contienen otros arrays (como una matriz). Permiten representar colecciones de registros.

$alumnos = [
    ["nombre" => "Lucía", "nota" => 8],
    ["nombre" => "Pablo", "nota" => 6],
    ["nombre" => "Marta", "nota" => 9]
];
echo "<pre>";
print_r($alumnos);
echo "</pre>";

echo "El nombre del alumn@ en la posicion \$alumnos[1]['nombre'] es: ".$alumnos[1]["nombre"]."<br>";
echo "La nota del alumn@ en la posición \$alumnos[2]['nota'] es: ".$alumnos[2]["nota"]."<br>";

// Mostrar todos los registros
for ($i = 0; $i < count($alumnos); $i++) {
    echo "El alumn@ de la posición \$alumnos[$i] se llama ".$alumnos[$i]["nombre"]." y su nota es: ".$alumnos[$i]["nota"].".<br>";
}
