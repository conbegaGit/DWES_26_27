<?php

echo "<h4>1. Comprobar si existe un valor: in_array </h4>";

$lenjuajes = ["PHP", "Java", "Python"];

if (in_array("PHP", $lenjuajes)) {
    echo "El lenguaje existe";
} else {
    echo "El modulo no existe";
}

// El tercer argumento de in_array() permite exigir una comparación estricta de tipo y valor.

$numeros = [1, 2, 3];
var_dump(in_array("2", $numeros, true)); // false

echo "<h4>2. Calcular la media de unas notas</h4>";

$notas = [7, 8, 5, 9, 6];
$media = array_sum($notas) / count($notas);
echo "La media es: " . $media;

echo "<h4>3. Ordenar un array</h4>";

$notas = [8, 5, 9, 6];
sort($notas);
print_r($notas);

$precios = [
    "raton" => 25,
    "teclado" => 10,
    "monitor" => 150
];
asort($precios);
print_r($precios);

$alumnos = [
    ["nombre" => "Lucía", "nota" => 8],
    ["nombre" => "Pablo", "nota" => 4],
    ["nombre" => "Marta", "nota" => 9]
];  

echo "<h4>6. Mostrar los datos en una tabla</h4>";
echo "<table border='1'>";
echo "<tr><th>Nombres</th><th>Notas</th></tr>";

foreach ($alumnos as $alumno) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($alumno['nombre']) . "</td>";
    echo  "<td>" . htmlspecialchars($alumno['nota']) . "</td>";
    echo "</tr>";
}

?>