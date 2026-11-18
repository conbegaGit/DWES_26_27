<?php
echo "<h4>1. Crear un array</h4>";

// Existen 2 formas de crear un array:
// $frutas = ["manzana", "pera", "plátano"];      // sintaxis corta
$frutas = array("manzana","pera","plátano");      // función array()

echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<h4>2. Consultar un elemento</h4>";

// Se accede por su índice, igual que en Java.
echo "La fruta en la posición \$frutas[0] es: $frutas[0].<br>";

echo "<h4>3. Añadir elementos</h4>";
// array_push($array, $valor): Añade elementos al final.
// array_pop($array): Elimina y devuelve el último elemento.
// array_shift($array): Elimina y devuelve el primer elemento.
// array_unshift($array, $valor): Añade elementos al principio..

// $array[] = valor añade el valor al final (como un array_push de un solo elemento).
// OJO: si el array no existiera, lo crearía nuevo con solo ese valor.
$frutas[] = "naranja";
echo "<pre>";
print_r($frutas);
echo "</pre>";

array_push($frutas, "uva", "kiwi");
echo "<pre>";
print_r($frutas);
echo "</pre>";

// array_pop: quita el último y lo devuelve
$ultimo = array_pop($frutas);
echo "array_pop ha sacado: $ultimo";
echo "<pre>";
print_r($frutas);
echo "</pre>";
array_push($frutas, $ultimo); // lo devolvemos al array

// array_shift: quita el primero y lo devuelve (las claves se renumeran)
$primero = array_shift($frutas);
echo "array_shift ha sacado: $primero";
echo "<pre>";
print_r($frutas);
echo "</pre>";

// array_unshift: vuelve a añadirlo al principio
array_unshift($frutas, $primero);
echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<h4>4. Modificar elemento</h4>";

// Se indica el índice que se quiere cambiar y se le asigna el nuevo valor.
$frutas[0] = "sandía";
echo "<pre>";
print_r($frutas);
echo "</pre>";

// En un array asociativo se modifica (o crea) por clave.
$producto["precio"] = 30;
echo "<pre>";
print_r($producto);
echo "</pre>";

echo "<h4>5. Eliminar elementos</h4>";
// unset($array[clave]) elimina el elemento, pero NO reorganiza las posiciones:
// queda un "hueco" en los índices.

unset($frutas[1]);
echo "<pre>";
print_r($frutas);
echo "</pre>";

// Para volver a numerar los índices de forma consecutiva se usa array_values().
$frutas = array_values($frutas);
echo "<pre>";
print_r($frutas);
echo "</pre>";
