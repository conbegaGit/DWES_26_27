<?php
    echo "Ruta dentro de htdocs: " . $_SERVER['PHP_SELF']."<br>";

    echo "<h3>1. Contenido del array global \$_SERVER</h3>";

    global $contador;
    $contador = 10;

    $GLOBALS['mensaje'] = "Este es mi primer mensaje";
    $GLOBALS['numero'] = 50;

    echo "<pre>";
    print_r($_SERVER);
    echo "</pre>";

    echo "<h3>El número es: " . $GLOBALS['numero'] . "</h3>";

    echo "<h3> --- </h3>";

    echo "<h3> SWITCH </h3>";
    $var = 4;
    switch ($var) {
        case 1:
            echo "Es un uno";
            break;
        case 2:
            echo "Es un dos";
            break;
        case 3:
            echo "Es un tres";
            break;
        default: 
            echo "No es uno, ni un dos, ni un tres";
    };
?>