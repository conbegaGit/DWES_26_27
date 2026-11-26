<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login básico</title>
</head>
<body>
    <form action = "login_basico.php" method = "POST">
        <label>Usuario:</label>
        <input name = "usuario" type = "text"> <!--El name es para que se puedan distingir entre diferentes inputs del formulario dentro del php-->
        <br><br>

        <label>Contraseña:</label>
        <input name = "clave" type = "password">
        <br><br>

        <label>Correo electrónico:</label>
        <input name = "correo" type = "text">
        <input type="submit">
    </form>
</body>
</html>