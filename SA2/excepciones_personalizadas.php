<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h4>Excepciones personalizadas</h4>";

        class EdadInvalidaExcepcion extends Exception{
        }

        $edad = 15;
        try{
            if($edad < 18){
                throw new EdadInvalidaExcepcion(
                    "La edad debe ser igual o superior a 18 años."
                );
            }
            echo "<p>Edad correcta</p>";
        } catch(EdadInvalidaException $e){
            echo "<p>Error: ". $e->getMessage() ."</p>";
        }
    ?>
</body>
</html>