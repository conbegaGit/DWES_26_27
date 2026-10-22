<!DOCTYPE html>
<html lang="es">
    <head>
        <title>IF_ELSEIF_SWITCH</title>
    </head>
    <body>
        <?php
        echo "<h3>1. IF ELSE IF</h3>";
$var = 3;
if($var == 1){
    echo "Es un uno";
}else if($var == 2){
    echo "Es un dos";
}else if($var == 3){
    echo "Es un tres";
}else {
    echo "No es ni uno, ni dos, ni tres";
}

        echo "<h3>2. SWITCH</h3>";
        //Switch es equivalente, pero su lectura es más clara y más fácil de mantener. Además, es más eficiente que if else if
        $var = 4;
        switch($var){
            case 1:
                echo "Es un uno";
                break; //si no hay break al final de cada case, se ejecutan todos los case siguientes hasta que encuentra un break o hasta el final del switch
            case 2:
                echo "Es un dos";
                break;
            case 3:
                echo "Es un tres";
                break;
            default:
                echo "No es ni uno, ni dos, ni tres";
        }
        ?>
    </body>
</html>