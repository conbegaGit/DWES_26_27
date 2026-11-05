<?php

echo "<h4>1. Función defninida por el usuario</h4>";

function mostrarBienvenida() {
    echo "<p>Bienvenido al módulo de DWES</p>";
}

mostrarBienvenida();





echo "<h4>2. Funciones con parámetros</h4>";

function presentarAlumno($nombre, $curso) {
    echo "<p>Hola, soy $nombre y estoy en el curso de $curso</p>";
}

presentarAlumno("Lucía", "2ºDAM");
presentarAlumno("Pedro", "1ºDAM");





echo "<h4>3. Funciones con return</h4>";

function calcularIVA($precio) {
    return $precio * 0.21;
}

$precio = 100;
$iva = calcularIVA($precio);
$total = $precio + $iva;

echo "<p>Precio: $precio €</p>";
echo "<p>IVA: $iva €</p>";
echo "<p>Total: $total €</p>";