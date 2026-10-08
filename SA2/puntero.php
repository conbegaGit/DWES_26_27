<!DOCTYPE html>
<html>
    <head>
        <title>Puntero</title>
    </head>
    <body>
        <?php
        $var1 = 100;
        $var2 = &$var1; //puntero (copia de seguridad que copia la variable en todo momento y si se cambia alguno se cambian los dos)
        $var3 = $var1; //la tipical de asignación de variable
        echo "$var2<br>"; //imprime var2 (100)
        $var2 = 300; //cambia var2 a 300 (y por lo tanto var1 también)
        echo "$var1<br>"; //imprime var1 (300)
        $var3 = 400; //asigna 400 a var3
        echo $var2; //imprime var2 (300)
        ?>
    </body>
</html>