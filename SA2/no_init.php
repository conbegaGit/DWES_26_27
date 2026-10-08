<!DOCTYPE html>
<html>
    <head>
        <title>No init</title>
    </head>
    <body>
        <?php
        $var1 = 100;
        $var3 = 100 + $var2; //$var2 no existe, se toma como 0
        echo "$var3 <br>"; //muestra 100
        $var3 = 100 * $var2; // $var2 no existe, se toma como 0
        echo "$var3 <br>"; // muestra 0

        $cadena = "hola" * $var2; //no puedees sumas variables sin inicializar con cadenas de texto
        $cadena2 = "mundo" + $var2;
        echo $cadena;
        echo $cadena2;
        ?>
    </body>
</html>