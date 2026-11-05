<?php

echo "<h4>1. Función definida por el usuario</h4>";

function mostrarBienvenida() {
    echo "<p>Bienvenido al módulo de DWES.</p>";
}

mostrarBienvenida();

echo "<h4>2. Función con parámetros</h4>";

function presentarAlumno($nombre, $curso) {
    echo "<p>$nombre estudia $curso.</p>";
}

presentarAlumno("Ana", "2º DAM");
presentarAlumno("Carlos", "1º DAM");

echo "<h4>3. Funciones con returno</h4>";

function calcularIVA($precio) {
    return $precio * 0.21;
}

$precio = 100;
$iva = calcularIVA($precio);
echo "<p>El IVA de $precio euros es $iva euros.</p>";



?>