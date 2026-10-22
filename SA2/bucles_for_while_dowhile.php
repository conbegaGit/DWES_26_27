<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles repetitivos</title>
</head>
<body>
    <?php    
    echo "<h3>1. Bucle for</h3>";
        for($i =0; $i < 5; $i = $i + 1){
        echo "En el for $i<br>";
    }

    echo "<h3>2. Bucle while</h3>";
    $i = 0;
    while($i < 5){
        echo "En el while $i<br>";
        $i = $i + 1;
    }

    echo "<h3>3. Bucle do while</h3>";
    //La mayor diferencia entre while y do while es que el do while se ejecuta al menos una vez aunque la condición sea falsa
    $i = 0;
    do {
        echo "En el do-while $i<br>";
        $i = $i + 1;
    } while($i < 0);
    ?>
</body>
</html>