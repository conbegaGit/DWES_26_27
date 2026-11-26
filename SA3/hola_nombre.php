<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paso de parametros con get</title>
</head>
<body>
    <?php
    //http://localhost:3000/SA3/hola_nombre.php?nombre=Sergio&nombre2=Lucia
    
    //El parametro de entrada se pasa por la url, con & se pueden poner más valores
    echo "Hola ". $_GET["nombre"];
    echo "<br>";

    //comprobando si han pasado los parámetros insull($_GET["nombre"])

    if(empty($_GET["nombre"])){
        echo "Error, falta, el parámetro nombre";
    }else{
        echo "Hola " . $_GET["nombre2"];
    }
    ?>
</body>
</html>