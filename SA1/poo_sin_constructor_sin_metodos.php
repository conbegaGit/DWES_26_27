<?php

    echo "<h4>Crear objetos Persona SIN constructor y SIN métodos</h4>";

    /*
    class Persona: define una clase llamada Persona 
    $nombre y $edad: son los atributos de la clase
    public: indica que los atributos son accesibles desde fuera e la clase
    */

    class Persona {
        public $nombre;
        public $edad;
    }

    //creamos dos objetos
    $persona1 = new Persona;
    $persona2 = new Persona;

    //asignamos valores
    $persona1->nombre = "Ana";
    $persona1->edad = 20;

    $persona2->nombre = "Carlos";
    $persona2->edad = 22;

    //mostramos los datos
    echo "<p>Nombre: " . $persona1->nombre . "</p>";
    echo "<p>Edad: " . $persona1->edad . "</p>";

    echo "<hr>";

    echo "<p>Nombre: " . $persona2->nombre . "</p>";
    echo "<p>Edad: " . $persona2->edad . "</p>";

?>