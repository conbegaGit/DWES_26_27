<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Try-Catch-Finally</title>
</head>
<body>
    <?php
    echo "<h4>Excepcione TRY-CATCH-FINALLY</h4>";
    $edad = 17;
    try {
        //Codigo que puede generar una excepción
        if ($edad < 18) {
            throw new Exception("Debes ser mayor de edad");
        }
        echo "<p>Acceso permitido</p>";
    }catch (Exception $e) {
        //Tratamiento de la excepción

        /*
        El objeto $e que recibe catch permite consultar información sobre la excepción que se ha producido.

        getMessage() devuelve el mensaje de error.
        getCode() devuelve el código de la excepción.
        getFile() devuelve el archivo donde se produjo la excepción.
        getLine() devuelve la línea donde se produjo la excepción.
        getTrace() devuelve informacion sobre la secuencia de llamadas.
        */
        echo "<h3>Información de la excepción</h3>";
        echo "<p>Mensaje: " . $e->getMessage() . "</p>";
        echo "<p>Código: " . $e->getCode() . "</p>";
        echo "<p>Archivo: " . $e->getFile() . "</p>";
        echo "<p>Línea: " . $e->getLine() . "</p>";
    }finally {
        //Código que se ejecuta siempre
        echo "<p>Fin del bloque try-catch-finally</p>";
    }
    ?>
</body>
</html>