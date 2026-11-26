<?php

    echo "<h4>Crear objetos Persona CON constructor y CON métodos</h4>";

    class Persona {
        public $nombre;
        public $edad;

        //constructor: método mágico, son nombres reservados a tareas concretas y que comienzan por dos guiones bajos "__"

        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        /*
        - public function mostrarDatos(): define un método público
        - $this: hace referencia al objeto actual
        - this->nombre: permite acceder al atributo nombre del objeto actual
        - persona1->mostrarDatos(): ejecuta el método del objeto
        */

        public function mostrarDatos() {
            echo "<p>Nombre: " . $this->nombre . "</p>";
            echo "<p>Edad: " . $this->edad . "</p>";

        }

    }

    //creamos el objeto indicando los valores
    $persona1 = new Persona("Ana", 20);

    $persona1->mostrarDatos();

?>


