<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excepciones Personalizadas</title>
</head>
<body>
    <?php
    echo "<h4>Excepciones Personalizadas</h4>";

    class EdadInvalidaException extends Exception { 
    }

    $edad = 15;
    try {
        if ($edad < 18) {
            throw new EdadInvalidaException("La edad debe ser mayor o igual a 18 años");
        }
        echo "<p>Edad correcta</p>";
    } catch (EdadInvalidaException $e) {
        echo "<p>Error: " . $e->getMessage() . "</p>";
    }
    ?>
</body>
</html>