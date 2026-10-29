<?php 
    echo "<h4>1. Crear un array </h4>";
    //existen dos formas de crear un array
    $frutas = ["manzana", "pera", "platano"];

    //esta forma no se suele usar
    $frutas = array("manzana", "pera", "platano");

    echo "<pre>";
        print_r($frutas);
    echo "</pre>";



    echo "<h4>2. Consultar n elemento </h4>";
    echo "La fruta en la posición \$frutas[0].<br>";



    echo "<h4>3. Añadir elementos</h4>";
    //array_push($$array, $valor): Añade elementos al final
    //array_pop($array): Elimna y devuelve el último elemento
    //array_shift($array): Elimina y devuelve el primer elemento 
    //array_unshift($array, $valor): añade elementos al principio

    $frutas [] = "naranja";
    echo "<pre>";
        print_r($frutas);
    echo "</pre>"; 

    array_push($frutas, "uva", "kiwi");

    echo "<pre>";
        print_r($frutas);
    echo "</pre>";



    echo "<h4>4. Modificar elementos</h4>";
    $frutas[0] = "sandía";
    echo "<pre>";
        print_r($frutas);
    echo "</pre>";

    $producto["precio"] = 30;
    echo "<pre>";
        print_r($producto);
    echo "</pre>";



    echo "<h4>5. Eliminar elementos</h4>";
    //unset() elimina el elemento, pero no necesariamente reorganiza índices numéricos 
    unset($futas[1]);   //se elimina el 1 por completo... se queda 0,2,3...
    //Para obtener valores con índices numéricos nuevos:
    $numeros = array_values($frutas);


    

?>

