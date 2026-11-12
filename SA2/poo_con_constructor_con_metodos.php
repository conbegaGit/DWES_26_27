<?php
    class Persona {
        public $nombre;
        public $edad;

        public function __construct($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function mostrarDatos() {
            echo "<p>Nombre: ".$this->nombre."</p>";
            echo "<p>Edad: ".$this->edad."</p>";
        }
    }

    $persona1 = new Persona("Jose",22);
    $persona2 = new Persona("Ana",85);

    $persona1->mostrarDatos();