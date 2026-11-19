<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        echo "<h4>1. foreach: la forma más habitual</h4>";

        $frutas = ["manzana", "pera", "plátano"];

        foreach ($frutas as $fruta){
            echo $fruta . "<br>";
        }

        // for each recorre los elementos y guarda cada valor, en cada iteracion, en la variable indicada.

        echo "<h4>2. foreach: Obtener la clave y el valor</h4>";

        $notas = [
            "Lucía" => 8.78,
            "Jeremy" => 9.55,
            "Pedro Sanchez" => 3.63
        ];

        // asociamos una variable a la clave y otra al valor
        foreach ($notas as $nombre => $nota){
            echo "$nombre ha sacado un $nota.<br>";
        }


        echo "<h4>3. Recorrer con for</h4>";

        $notas = [7,8,5,9,6];
        // el count es ocmo el .length de Java en un array.
        for($i = 0; $i < count($notas); $i++){
            echo $notas[$i]. "<br>";
        }
    ?>
</body>
</html>