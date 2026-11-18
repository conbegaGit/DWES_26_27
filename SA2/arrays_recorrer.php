<?php
echo "<h4>1. foreach: la forma más habitual </h4>";

$frutas = ["manzana","pera","plátano"];

// foreach recorre los elementos y, en cada iteración, guarda el valor en la variable indicada.
foreach ($frutas as $fruta) {
    echo $fruta."<br>";
}

echo "<h4>2. foreach: Obtener la clave y el valor</h4>";

$notas = [
    "Lucía" => 8,
    "Pablo" => 6,
    "Marta" => 9
];

// Se asocia una variable a la clave y otra al valor: $clave => $valor
foreach ($notas as $nombre => $nota) {
    echo "$nombre ha sacado un $nota<br>";
}

echo "<h4>3. Recorrer con for</h4>";

$notas = [7, 8, 9, 6];

// count() es como el .length de Java en un array.
// Solo sirve con arrays indexados con claves consecutivas 0, 1, 2...
for ($i=0; $i<count($notas); $i++) {
    echo $notas[$i]."<br>";
}
