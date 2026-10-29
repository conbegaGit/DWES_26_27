<?php
echo "<h4>1. foreach:la forma más habitual </h4>";

$frutas = ["manzana", "pera", "plátano"];
foreach ($frutas as $fruta) {
    echo "<p>$fruta</p>";
}

//foreach recorre los elementos y guarda cada valor, en cada iteración, en la variable indicada.





echo "<h4>2. foeach: Obtener la clave y el valor </h4>";

$notas = [
    "Lucía" => 8,
    "Pablo" => 6,
    "Marta" => 9
];
//Asociamos una variable a la clave y otra al valor
foreach ($notas as $nombre => $nota) {
    echo "$nombre ha sacado un $nota <br>";
}






echo "<h4>3. Recorrer con for </h4>";

$notas = [7, 8, 5, 9, 6];

for ($i =0; $i < count($notas); $i++) {
    echo $notas[$i] . "<br>";
}
?>