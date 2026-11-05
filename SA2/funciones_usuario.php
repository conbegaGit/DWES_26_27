<?php
echo"<h4>1.Funciones definidas por el usuario</h4>";

function mostrarBienvenida(){
    echo"<p>Bienvenido al módulo de DWES</p>";
}

mostrarBienvenida();
echo"<h4>2. Funciones con parámetros</h4>";

function presentarAlumno($nombre, $curso){
    echo"<p>Alumno: $nombre, Curso: $curso</p>";
}
presentarAlumno("Lucía", "2ªDAM");
presentarAlumno("Carlos", "1ªDAW");

echo"<h4>3.Funciones con return</h4>";

function calcularIva($precio){
    return $precio * 0.21;
}
$precio = 100;
calcularIva(100);
echo"<p>Precio: $precio $</p>";
echo"<p> IVA: " . calcularIva($precio) . " $</p>";
echo"Total: " . ($precio + calcularIva($precio)) . " $</p>";
