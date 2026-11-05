<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4> 1. Crear un array</h4>";

        // existen 2 formas de crear un array
        $fruta = ["manzana", "pera", "platano"];

        $fruta = array("manzana", "pera", "platano");

        echo "<pre>";
        print_r($fruta);
        echo "</pre>";

        echo "<h4>2. Consultar un elemento</h4>";

        echo "La fruta en la posición \$frutas[0] es: $fruta[0].<br>"; // para consultar un objeto dentro del array, es igual que en java

        echo "<h4>3. Añadir elementos</h4>";
        // array_push($array, $valor): Añade elementos al final del array
        // array_pop($array): elimina y devuelve el ultimo elemento del array
        // array_shift($array): Elimina y devuelve el primer elemento del array
        // array_unshift($array, $valor): Añade elementos al principio del array

        // reiniciamos el array con un solo valor
        $frutas [] = "naranja";
        // $fruta [] = "naranja"; añade el valor naranja al array ya existente, como si se utilizara array_push
        echo "<pre>";
        print_r($frutas); // y verificamos que solo tiene el valor de naranja
        echo "<pre>";

        // ahora añadimos dos valores nuevos
        array_push($frutas, "uva", "kiwi");

        echo "<pre>";
        print_r($frutas); // y ahora aparecen en el array
        echo "<pre>";

        //ahora vamos a borrar el ultimo valor mediante array_pop
        $ultimo = array_pop($frutas);
        echo "$ultimo";
        echo "<pre>";
        print_r($frutas);
        array_push($frutas, $ultimo); // ahora devolvemos el valor dentro del array

        // probemos ahora a utilizar el array_shift
        $primero = array_shift($frutas);
        echo "$primero<pre>";
        print_r($frutas); // como se puede observar, el valor naranja pasa a la variable primero y se elimina del array
        echo "<pre>";
        // probemos ahora ha añadir el primer valor al principio mediante array_unshift
        array_unshift($frutas, $primero);
        print_r($frutas);


        echo "<h4>4. Modificar elementos</h4>";

        $frutas[0] = "sandía";// indicas el indice que te interesa cambiar y luego añades el valor del nuevo indice
        echo "<pre>";
        print_r($frutas);
        echo "<pre>";
        

        echo "<h4>5. Eliminar elementos </h4>"; // se utiliza la funcion unset[clave], hay que tener cuidado, porque al realizar un unset en mitad del array no reorganiza las posiciones.

        unset($frutas[1]);
        print_r($frutas);
        echo "<pre>";
        // para reprdenar los calores correctamente utilizamos el array_values
        $frutas = array_values($frutas);
        print_r($frutas);
        echo "<pre>";
    ?>
</body>
</html>