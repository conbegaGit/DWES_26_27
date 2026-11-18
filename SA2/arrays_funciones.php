<?php
echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

$lenjuajes = ["PHP","Java","Python"];

if (in_array("PHP",$lenjuajes)) {
    echo "El lenguaje existe";
} else {
    echo "El módulo no existe";
}

$numeros = [1,2,3];
var_dump((in_array("2",$numeros,true))); //false

echo "<h4>2. Calcular la media de unas notas</h4>";

$notas = [7, 8, 5, 9, 6];

$media = array_sum($notas) / count($notas);
echo "La media es: ".$media;

echo "<h4>3. Ordenar un array</h4>";
// sort($array): Ordena los valores y renumera las claves numérticas.
// asort($array): Ordena por valor conservando las claves.
// ksort($array): Ordena por clave.

$notas = [8, 5, 9, 6];
sort($notas);
print_r($notas); //[5, 6, 8, 9]

$precios = [
    "raton" => 25,
    "teclado" => 10,
    "monitor" => 150
];
asort($precios);
echo "<br>";
print_r($precios); //[10, 25, 150]

echo "<h4>6. Mostrar los datos en una tabla HTML</h4>";

$alumnos = [
    ["nombre" => "Lucía", "nota" => 8],
    ["nombre" => "Pablo", "nota" => 4],
    ["nombre" => "Marta", "nota" => 9]
];

echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Nota</th></tr>";

foreach ($alumnos as $alumno) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($alumno["nombre"]) . "</td>";
    echo "<td>" . $alumno["nota"] . "</td>";
    echo "</tr>";
}
echo "</table>";