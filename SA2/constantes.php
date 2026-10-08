<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        /* Uso de constantes, siempre deben ir en mayusculas TODO*/
        define("LIMITE", 1000);
        $var1 = 100 + LIMITE;
        echo LIMITE."<br>";
        echo "La suma del limite y var1 es: ". $var1; // no se puede poner entre las comillas
        
    ?>
</body>
</html>