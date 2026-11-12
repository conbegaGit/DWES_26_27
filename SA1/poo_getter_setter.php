<?php

echo "<h4>Crear objetos con atributos private</h4>";

class Alumno {
    private $nombre;
    private $nota;

    // Constructor: Metodo mágico, son nombres reservados a tareas concretas y que compienzan por dos guiones bajos,"__".

    public function __construct($nombre, $nota) {
        $this->nombre = $nombre;
        $this->nota = $nota;
    }

    // Getter
    public function getNombre() {
        return $this->nombre;
    }

    public function getNota() {
        return $this->nota;
    }

    // Setter, hacer validaciones antes de asignar un valor a un atributo privado. En este caso, la nota debe estar entre 0 y 10, es buena practica o mala?
    public function setNota($nota) {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            echo "<p>La nota debe de estar entre 0 y 10.</p>";
        }
    }
}

$alumno = new Alumno("María", 8);

echo "<p>Nombre: " . $alumno->getNombre() . "</p>";
echo "<p>Nota: " . $alumno->getNota() . "</p>";

$alumno->setNota(9);

echo "<p>Nueva nota: " . $alumno->getNota() . "</p>";
