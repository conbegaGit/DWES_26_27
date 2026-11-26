<?php
    /*declaración de variables */
    $entero = 4; // tipo integer
    $numero = 4.5; //tipo coma flotante
    $cadena = "cadena"; //tipo cadena de caracteres
    $bool = TRUE; //tipo booleano

    $a = 5; //entero

    //imprimimos
    echo "Tipo de dato variable " . '$a' . " inicial: ". gettype($a); //imprime el tipo de dato de a

    //para hacer un salto de linea
    echo "<br>";

    $a = "Hola"; //cambia de entero a cadena

    //imprimimos
    echo "Tipo de dato variable " . '$a' . " final: " . gettype($a); //se comprueba que ha cambiado el valor de la variable a


    //NOTAS:
    //el punto se usa para concatenar cadenas de texto
    //las comillas dobles se usan para escribir texto
    //las comillas simples se usan para escribir literalmente el contenido de la variable, es decir, no interpreta el valor de la variable, sino que lo toma como texto

?>


