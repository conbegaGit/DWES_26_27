<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Básico</title>
</head>
<body>
    <?php
    //Los valores se introducen desde el html
    echo "Usuario introducido: " . $_POST['usuario']. "<br>";
    echo "Clave introducida: " . $_POST['clave'] . "<br>";

    //Comprobamos que se han recibidos los dos campos
    if(!isset($_POST["usuario"]) || !isset($_POST["clave"])){
        echo "Error: debes introducir usuario y contraseña";
    }
    //Comprobamos que los campos no esten vacios
    elseif(empty($_POST["usuario"]) || empty($_POST["clave"])){
        echo "Error: los campos son obligatorios";
    }
    //FILTER_VALIDATE_EMAIL es una constante predefinida de PHP que se utiliza
    //junto con la funcion filter_var() para comprobar si una cadena tiene un formato
    //valido de correo electrónico.
    elseif(!filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)){
        echo "Error: el correo elctrónico no tiene un formato válido";
    }
    ?>
</body>
</html>