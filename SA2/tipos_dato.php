<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        /*Declaracion de variables*/ 
        $entero = 4; // tipo integer
        $numero = 4.5; // tipo coma flotante
        $cadena = "cadena"; // tipo cadena de caracteres
        $bool = TRUE; // tipo booleano
        /* cambio de tipo de una variable*/
        $a = 5; // es un entero
        $tipo1 = gettype($a); // imprime el tipo de dato de a
        echo "<br>"; // salto de linea
        $a = "Hola"; // cambia a cadena
        echo "El tipo de dato inicial de la variable \$a es: ".$tipo1."<br>Ahora \$a es: ".gettype($a); // se comprueba que ha cambiado
        // se utiliza el punto para concatenar cadenas y la contrabarra para ignorar caracteres
    ?>
</body>
</html>