<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // http://loclahost:3001/DWES_26_27/SA3/hola_nombre.php?nombre=Daniel

    if (empty($_GET["nombre"])){ // tambien se puede utilizar isnull($_GET["nombre"]) en vez de empty
        // Verificamos para que no de error que el nombre exista
        echo "Error, falta el parámetro nombre";
    }else{
        // Imprimimos, accedemos a la variable superglobal GET y accedemos al parametro nombre
        echo "Hola ". $_GET["nombre"];
    }

    

    
    
    
    
    
    ?>
</body>
</html>