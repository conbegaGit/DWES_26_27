<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones usuario</title>
</head>
<body>
    <?php
    echo "<h4>1. Función definida por el usuario</h4>";

    function mostrarBienvenida(){
        echo "<p>¡Bienvenido al módulo de DWES</p>";
    }

    mostrarBienvenida();

    echo "<h4>2. Función con parámetros</h4>";

    function presentarAlumno($nombre, $curso) {
        echo "<p>$nombre estuida $curso</p>";
    }

    presentarAlumno("Sergio", "2º DAM");
    presentarAlumno("Lucía", "1º DAM");

    echo "<h4>3. Función con return</h4>";

    function calcularIVA($precio) {
        return $precio * 0.21;
    }

    $precio = 100;
    $iva = calcularIVA($precio);
    $total = $precio + $iva;

    echo "<p>Precio: $precio €</p>";
    echo "<p>IVA: $iva €</p>";
    echo "<p>Total: $total €</p>";
    ?>
</body>
</html>