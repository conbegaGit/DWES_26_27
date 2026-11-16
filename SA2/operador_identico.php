<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 3;
        $b = "3";
        if ($a == $b){
            echo "Son iguales <br>";
        }else {
            echo "No son iguales <br>";
        }

        if ($a === $b){
            echo "Son identicos <br>";
        }else {
            echo "No son identicos <br>";
        }
    ?>
</body>
</html>