<?php

    echo"<h4>Funciones definidas por el usuario</h4>";

    function mostrarBienvenida(){
        echo"<p>Bienvenido al modulo de DWES</p>";
    }

    mostrarBienvenida();

    echo"<h4>Funciones con parámetros</h4>";

    function presentarAlumno($nombre,$curso){
        echo"<p>$nombre estudia $curso</p>";
    }

    presentarAlumno("Juan","2ªDAM");
    presentarAlumno("Ana","1ºDAM");

    echo"<h4>Funciones con return</h4>";

    function calcularIVA($precio){
        $iva=$precio*0.21;
        return $iva;
    }

    $precio=100;
    $iva=calcularIVA($precio);
    $total=$precio+$iva;
    echo"<p>El precio es $precio €</p>";
    echo"<p>El IVA es $iva €</p>";
    echo"<p>Total: $total €</p>";
    