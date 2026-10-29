<?php
echo "<h4>1. Crear un Array</h4>";

$frutas = ["manzana", "pera", "plátano"];

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo"<h4>2. Consultar un Elemento</h4>";

echo "La primera fruta es: " . $frutas[0] . "<br>";
echo "La segunda fruta es: " . $frutas[1] . "<br>";
echo "La tercera fruta es: " . $frutas[2] . "<br>";

$producto =[
    "nombre" => "Teclado",
    "precio" => 15,
];

echo "<h4>3. Añadir un Elemento</h4>";
//array_push ($array,$valor): Añade elementos al final
//array_pop($array): Elimina y devuelve el último elemento
//array_shift($array): Elimina y devuelve el primer elemento
//array_unshift($array,$valor):Añade elementos al principio

$frutas[] = "naranja";
echo"<pre>";
print_r($frutas);
echo "</pre>";
array_push($frutas,"uva","kiwi");
echo "<pre>";
print_r($frutas);
array_unshift($frutas,"cereza");
print_r($frutas);
echo "</pre>";

echo "<h4>4. Modificar elementos</h4>";

$frutas[0] = "sandía";
echo "<pre>";
print_r($frutas);
echo "</pre>";

$producto["precio"] = 30;
echo "<pre>";
print_r($producto);
echo "</pre>";

echo "<h4>5. Eliminar elementos</h4>";
unset($frutas[1]);
// Para obtener valores de índices numéricos nuevos
$numeros = array_values($frutas); 
// reorganiza los indices
// unset() elimina el elemento, pero no necesariamente reorganiza los indices

