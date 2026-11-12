<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4>Excepciones TRY....CARCH....FINALLY</h4>";

        $edad = 15;

        try{ // Intenta este bloque del programa y si da error lo recoge del catch
            if ($edad < 18){
                throw new Exception("Debes ser mayor de edad.");
            }
        }catch(Exception $e){
            // Tratamiento de la excepción

            /*
            El objeto $e que recibe catch permite consultar información sobre al excepción

            getMessage(): Devuelve el mensaje de error
            getCode(): Devuelve el código de la excepción
            getFile(): Devuelve el archivo donde se produjo
            getLine(); Devuelve el número de línea
            getTrace(); Devuelve la información sobre la secuencia de llamadas
            */

            echo "<h3>Información de la excepción</h3>";

            echo "<p>Mensaje: ". $e->getMessage(). "}</p>";
            echo "<p>Código: ". $e->getCode(). "}</p>";
            echo "<p>Archivo: ". $e->getFile(). "}</p>";
            echo "<p>Linea: ". $e->getLine(). "}</p>";
            echo "<p>Rastro: ". $e->getTrace(). "}</p>";
        }finally{
            // Ejecuta si o si este apartado del programa
            echo "<h4>Fin del programa</h4>";
        }
    ?>
</body>
</html>