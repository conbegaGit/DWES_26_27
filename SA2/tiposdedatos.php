<!DOCTYPE html>
<html>
    <head>
        <title>Tipos de datos</title>
    </head>
    <body>
        <?php
        /* declaración de variables */
        $entero = 4; //tipo integer
        $numero = 4.5; //tipo coma flotante
        $cadena = "cadena"; //tipo de cadena de caracteres
        $bool = TRUE; //tipo booleano
        /* cambio de tipo de una variable */
        $a = 5; //entero
        $tipo1 = gettype($a); //imprime el tipo de dato de  a
        echo "<br>"; //salto de linea
        $a = "Hola"; //cambia a cadena
        echo "Tipo de dato de variable inicial ".$tipo1."<br>Tipo de dato de variable final ".gettype($a) //se comprueba que ha cambiado
        ?>
    </body>
</html>