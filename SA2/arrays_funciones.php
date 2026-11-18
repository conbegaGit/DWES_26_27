<?php
echo "<h4>1. Comprobar si existe un valor: in_array</h4>";
// in_array("valor buscado", $array, estricto(bool)): indica si el valor está en el array.

$lenguajes = ["PHP","Java","Python"];

if (in_array("PHP",$lenguajes)) {
    echo "El lenguaje existe";
} else {
    echo "El lenguaje no existe";
}

// El tercer argumento de in_array() exige una comparación estricta de tipo y valor (===).
$numeros = [1,2,3];
echo "<pre>";
var_dump((in_array("2",$numeros,true))); //false: "2" es string y en el array hay int
echo "</pre>";

echo "<h4>2. Calcular la media de unas notas</h4>";

$notas = [7, 8, 5, 9, 6];

// array_sum($array): suma todos los valores del array.
// count($array): número de elementos del array.
$media = array_sum($notas) / count($notas);
echo "La media es: ".$media; // 7

// Si el array estuviera vacío, count() devolvería 0 y la división daría error
// (DivisionByZeroError). Conviene comprobarlo antes:
$vacio = [];
if (count($vacio) > 0) {
    echo "<br>La media es: " . array_sum($vacio) / count($vacio);
} else {
    echo "<br>No hay notas para calcular la media";
}

echo "<h4>3. Ordenar un array</h4>";
// sort($array): Ordena los valores y renumera las claves numéricas.
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
print_r($precios); //[teclado => 10, raton => 25, monitor => 150]

ksort($precios);
echo "<br>";
print_r($precios); //[monitor => 150, raton => 25, teclado => 10]

echo "<h4>4. Filtrar elementos con array_filter()</h4>";
// array_filter($array, función): devuelve solo los elementos para los que la función devuelve true.
// Conserva las claves originales.

$notas = [4, 7, 3, 9, 5, 2];

$aprobadas = array_filter($notas, function ($nota) {
    return $nota >= 5;
});
echo "<pre>";
print_r($aprobadas); // [1 => 7, 3 => 9, 4 => 5]
echo "</pre>";

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
    // htmlspecialchars() evita que un texto con etiquetas HTML se interprete como código
    echo "<td>" . htmlspecialchars($alumno["nombre"]) . "</td>";
    echo "<td>" . $alumno["nota"] . "</td>";
    echo "</tr>";
}
echo "</table>";
