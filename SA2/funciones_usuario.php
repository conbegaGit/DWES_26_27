<?php

echo "<h4>1. Función definida por el usuario</h4>";

function mostrarBienvenida() {
    echo "<p>Bienvenido la módulo de DWES</p>";
}

mostrarBienvenida();

echo "<h4>2. Funciones con parámetros</h4>";

function saludar($nombre, $modulo) {
    echo "<p>Hola, $nombre. Bienvenido al módulo de $modulo</p>";
}

saludar("Adrián", "DWES");

echo "<h4>3. Funciones con return</h4>";

function calcularIVA($precio) {
    return $precio * 0.21;
}

$precio = 100; 
$iva = calcularIVA($precio);
$total = $precio + $iva;