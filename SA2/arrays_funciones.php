<?php
echo "<br>";
echo "<h4>1. Comprobar si existe un valor: in_array()</h4>";

$lenguajes = ["PHP", "Java", "Python"];

if (in_array("PHP", $lenguajes)) {
    echo "El lenguaje existe";
} else {
    echo "El lenguaje no existe";
}
echo "<pre>";

// Un tercer argumento en in_array permite exigir una comparación de tipo además del valor
$numeros = [1, 2, 3];
var_dump(in_array("2", $numeros, true)); //var_dump te da el tipo de variable y su valor

echo"<h4>2. Calcular una media</h4>";
$notas = [5, 6, 7, 8, 9];

// array_sum suma todos los contenidos del array
// count permite contar los espacios que tiene el array
$media = array_sum($notas) / count($notas);

echo "La media es $media";

echo "<h4>3. Ordenar un array</h4>";
// sort($array)
$precios = [
    "raton"=> 25,
    "teclado" => 10,
    "monitor"=> 150,
];
asort($precios);
echo "<br>";
print_r($precios);

echo "<h4>6. Mostrar los datos en una tabla HTML</h4>";

$alumnos = [
["nombre" => "Lucía", "nota" => 8],
["nombre" => "Pablo", "nota" => 4], 
["nombre" => "Marta", "nota" => 9]
];

echo "<table border = '2'>";
echo "<tr><th>Nombre</th><th>Nota</th></tr>";

foreach ($alumnos as $alumno) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($alumno["nombre"]) . "</td>";
    echo "<td>". $alumno["nota"] . "</td>";
    echo "</tr>";
}
echo "</table>";
?>