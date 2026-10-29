<?php
echo "<h3>TIPOS DE ARRAYS</h3>";

echo"<h4>1. Array INDEXADOS</h4>";
//Cada elemento se identifica mediante un indice numérico.
$colores = ["rojo", "verde", "azul"];
echo "<pre>";
print_r($colores);
echo "</pre>";

echo"El color en \$colores[1] es: $colores[1].<br>";



echo"<h4>2. Array ASOCIATIVOS</h4>";
//Cada elemento se identifica mediante una clave elegida por nosotros.
$alumno = [
    "nombre" => "Juan",
    "edad" => 20,
    "nota" => 8.5
];


echo "<pre>";
print_r($alumno);
echo "</pre>";

//ASI SERIA SI QUISIERAS ESCRIBIRLO EN UNA SOLA LINEA.
echo"El alumno se llama " .$alumno["nombre"]. ", tiene " .$alumno["edad"]. " años y su nota es " .$alumno["nota"]. ".<br>";
//ESTA ES SI QUIERES IMPRIMIR EXPLICITAMENTE CADA ELEMENTO.
echo"El nombre del alumno es: $alumno[nombre].<br>";
echo"La edad del alumno es: $alumno[edad].<br>";
echo"La nota del alumno es: $alumno[nota].<br>";







echo"<h4>3. Array MULTIDIMENSIONALES</h4>";
//Son arrays que contienen otros arays. Permiten representar colecciones de registros.
$alumnos = [
    ["nombre" => "Lucía", "nota" => 8],
    ["nombre" => "Pablo", "nota" => 6],
    ["nombre" => "Marta", "nota" => 9]
];

echo "<pre>";
print_r($alumnos);
echo "</pre>";

echo"El nombre del alumno en la posición \$alumnos[1]['nombre'] es: " .$alumnos[1]["nombre"]. "<br>";
echo"La nota del alumno en la posición \$alumnos[2]['nota'] es: " .$alumnos[2]["nota"]. "<br>";
?>