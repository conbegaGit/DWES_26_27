<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* las variables no inicilizadas daran advertencias con operaciones numericas, aun asi */
        $var1 = 100;
        $var3 = 100 + $var2; // var2 no existe, se tomara como 0   
        echo "$var3<br>";
        $var3 = 100 * $var2; // otra vez, var2 no existe, por ende, pilla 0 como valor
        echo "$var3 <br>";

        /* variables no inicializadas en variables cadenas */ 
        $cadena = "Hola" + $var2; // en este caso, si que dan errores fatales, porque lo toma como un valor null
        echo "$cadena"; // da Fatal error: Uncaught TypeError: Unsupported operand types: string + null in

    ?>
</body>
</html>