<?php

echo "<h4>1. Comprobar si existe un valor: in_array</h4>";

$lenguajes = ["PHP", "Java", "Python"];

if (in_array("PHP", $lenguajes)) {
    echo "El lenguaje existe <br>";
} else {
    echo "El módulo NO existe <br>";
}
//El tercer argumento de in_array() permite exigir una comparación estricta de tipo y valor.

$numeros = [1, 2, 3];
var_dump(in_array("2", $numeros, true)); //false





echo "<h4>2. Calcular la media de unas notas</h4>";

$notas = [7, 8, 5, 9, 6];


$media =array_sum($notas) / count($notas);
echo "La media de las notas es: " . $media; //7
//array_sum() suma los valores. Si el array puede estar vacío, hay que comprobarlo antes de dividir para evitar una división por cero.
//p.e. con count($notas) > 0)

echo "<h4>3. Ordenar un array</h4>";
//sort($array): Ordena los valores y remunera las claves numéricas.
//asort($notas): Ordena por el valor conservando las claves.
//ksort($array): Ordena por clave.

$notas= [8, 5, 9, 6];
sort($notas);
print_r($notas); //[5, 6, 8, 9]

$precios = ["raton" => 25, "teclado" => 10, "monitor" => 150];
asort($precios);//Ordena por valor conservando las claves.
echo "<br>";
print_r($precios);


echo "<h4>4. Filtrar elementos con array_filter()</h4>";

$notas = [4, 7, 3, 9, 5, 2];

$aprobados =array_filter($notas, function ($nota) {
    return $nota >= 5;
});
print_r($aprobados);














$alumnos = [
    ["nombre" => "Lucía", "nota" => 8],
    ["nombre" => "Pablo", "nota" => 4],
    ["nombre" => "Marta", "nota" => 9]
];


echo "<h4>6. Mostrar los datos en una tabla HTML</h4>";
echo "<table border='1'>";
echo "<tr><th>Nombre</th><th>Nota</th></tr>";

foreach ($alumnos as $alumno) {
    echo "<tr>";
    echo "<td>" . htmlspecialchars($alumno["nombre"]) . "</td>";
    echo "<td>" . $alumno["nota"] . "</td>";
    echo "</tr>";
}
echo "</table>";

//htmlspecialchars() ayuda a evitar que el texto se interprete como código HTML cuando se muestra una página.

?>