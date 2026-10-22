<?php

$var3 = 100;
if ($var3 > 100) {
    echo "El valor de la variable es mayor que 100";
} elseif ($var3 < 100) {
    echo "El valor de la variable es menor que 100";
} else {
    echo "El valor de la variable es igual a 100";
}

//Switch es equivalente, pero su lecutura es mas facil de entender, y es mas eficiente que if-elseif-else
echo "<h3>SWITCH</h3>";
$var4 = 20;
switch ($var4) {
    case 100:
        echo "El valor de la variable es igual a 100";
        break;
    case 200:
        echo "El valor de la variable es igual a 200";
        break;
    default:
        echo "El valor de la variable no es ni 100 ni 200";
}
