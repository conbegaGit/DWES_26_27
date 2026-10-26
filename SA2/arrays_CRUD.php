<?php
# Los arrays son una estructura flexible y potente en PHP. Unifican lo que en otros lenguajes
# se consigue con arrays b´saicos, vectores, listas o diccionarios

echo "<h4>1. Crear un array</h4>";

# 2 formas de crear un array:
# $variable = [_,_,_,_];
# $variable = array(_,_,_,); (Esta no se utiliza actualmente)

$frutas = ["manzana", "pera", "plátano"];
echo "<pre>";
print_r($frutas);
echo "</pre>";

echo "<h4>2. Consultar un elemento</h4>";
echo "La fruta en la posición \$frutas[0] es: $frutas[0]";
?>