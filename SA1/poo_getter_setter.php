<?php

    echo "<h4>Crear objetos con Atributos private</h4>";
    
     class Alumno {
        public $nombre;
        public $nota;

        //constructor: método mágico, son nombres reservados a tareas concretas y que comienzan por dos guiones bajos "__"

        public function __construct($nombre, $nota) {
            $this->nombre = $nombre;
            $this->nota = $nota;
        }

        //getter
        public function getNombre() {
            return $this->nombre;
        }

        //getter
        public function getNota() {
            return $this->nota;
        }

        //setter
        public function setNota($nota) {

            if ($nota >= 0 && $nota <= 10) {
                $this->nota = $nota;
            } else {
                echo "<p>La nota debe estar entre 0 y 10</p>";
            }

        }

    }

    $alumno = new Alumno("Maria", 8); 

    echo "<p>Alumno: " . $alumno->getNombre() . "</p>";
    echo "<p>Nota: " . $alumno->getNota() . "</p>";

    $alumno->setNota(9);

    echo "<p>Nueva nota: " . $alumno->getNota() . "</p>"; 

?>

