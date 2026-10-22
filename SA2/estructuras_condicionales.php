<?php
// Probando el uso de estructuras condicionales
# Uso de if - else if
echo "<h3>IF - ELSE IF</h3>";
$var = 3;
if ($var == 1) {
    echo "Es un uno.";
} else if ($var == 2) {
    echo "Es un dos.";
} else if ($var == 3) { # Aquí ve que el valor de la variable coincide
    echo "Es un tres.";
} else {
    echo "No es un uno, ni un dos, ni un tres.";
}

# Uso del switch
echo "<h3>SWITCH</h3>";
$var = 3;
switch ($var) {
    case 1:
        echo "Es un 1";
        break;
    case 2:
        echo "Es un 2";
        break;
    case 3: # Aquí ve que el valor de la variable coincide
        echo "Es un 3";
        break;
    default:
        echo "No es un 1, ni un 2, ni un 3";
}
?>