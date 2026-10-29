<?php

echo "<h4> 1. Crear un array </h4>";

//existen 2 formas de crear un array
$frutas= ["manzana", "pera", "plátano"];


//esta forma no suele usar
$frutas = array ("manzana", "pera", "plátano");

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<h4> 2. Consultar n elementos </h4>";

echo"La fruta en la posición \$frutas[0].<br>";





echo "<h4>3. Añadir elementos</h4>";
//array_push($array,$valor): Añade elementos al final.
//array_pop($array): Elimina y devuelve el último elemento.
//array_shift($array): Elimina y devuelve el primer elemento.
//array_unshift($array,$valor): Añade elementos al principio.


$frutas[] ="naranja";
echo "<pre>";
print_r($frutas);
echo "</pre>";

array_push($frutas, "uva", "kiwi");

echo"<pre>";
print_r($frutas);
echo"</pre>";





echo "<h4>4. Modificar elementos</h4>";

$frutas[0] = "sandia";
echo "<pre>";
print_r($frutas);
echo "</pre>";




echo "<h4>5. Eliminar elementos</h4>";

unset($frutas[1]);
//Para obtener valores con índices numericos nuevos.
$numeros =array_values($frutas);


//unset () elimina el elemento, pero no necesariamente


?>