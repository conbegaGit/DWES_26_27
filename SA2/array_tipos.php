<?php
    echo"<h3>TIPOS DE ARRAY</h3>";
    echo"<h4>1.Arrays IDEXADOS</h4>";
    // Cada elemento se identifica con su índice

$colores =[
    "rojo",
    "verde",
    "azul",
];
echo"<pre>";
print_r($colores);
echo "</pre>";
echo"El color en \$colores[1] es $colores[1].<br>";

echo"<h4>2.Arrays ASOCIATIVOS</h4>";
// Cada elemento se identifica con su clave elegida por nosotros
$alumno =[
    "nombre" => "Lucia",
    "edad" => 20,
    "nota" => "8.5",
];
echo"<pre>";
print_r($alumno);
echo "</pre>";
echo"El alumno se llama " .$alumno["nombre"] .", tiene " .$alumno["edad"] ." años y su nota es " .$alumno["nota"] .".<br>";

echo"<h4>3.Arrays MULTIDIMENSIONALES</h4>";

// Son arrays que contienen otros arrays. Permiten representar colecciones de registros

$alumnos =[
    ["nombre" => "Lucia", "nota" => "8"],
    ["nombre" => "Pablo", "nota" => "6"],
    ["nombre" => "Marta", "nota" => "9"],
];
echo"<pre>";
print_r($alumnos);
echo "</pre>";

echo "El nombre del alumn@ en la posición \$alumnos[1] es " .$alumnos[1]["nombre"] ." y su nota es " .$alumnos[1]["nota"] .".<br>";
echo "El nombre del alumn@ en la posición \$alumnos[2] es " .$alumnos[2]["nombre"] ." y su nota es " .$alumnos[2]["nota"] .".<br>";