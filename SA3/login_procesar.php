<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login procesar</title>
</head>
<body>
    <?php
    if ($_POST['usuario'] === "usuario" and $_POST["clave"] === "1234"){
        header("Location:bienvenido.html");
    }else{
        header("Location:error.html");
    }
    ?>
</body>
</html>