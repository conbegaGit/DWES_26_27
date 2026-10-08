<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Utilizacion del & - por asi decirlo juntan dos variablas (utilizan el mismo espacio en memoria)*/
        $var1 = 100;
        $var2 = &$var1; // utilizan el mismo espacio de memoria
        $var3 = $var1; // copia el valor dentro de otro espacio de memoria
        echo "<br>$var2<br>"; // imprimimos el valor de la variable2
        $var2 = 300; // cambiamos el valor de la variable 1 y 2 porque utilizan el mismo espacio de memoria
        echo "$var1<br>"; // imprimimos el valor de la variable 1 para verificar lo del espacio de memoria
        $var3 = 400; // cambiamos el valor de la variable 3 que no cambia el resto de variables (no comparte espacios de memoria)
        echo "$var1"; // verificamos que la variable 1 no se cambia
    ?>
</body>
</html>
