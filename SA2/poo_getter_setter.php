<?php

echo "<h4>Crear objetos con atributo private</h4>";

class Alumno {

    private $nombre;
    private $nota;

    public function __construct($nombre, $nota) {

        $this->nombre = $nombre;
        $this->setNota($nota);

    }

    //Getter 
    public function getNombre() {
        return $this->nombre;
    }

    //Getter
    public function getNota() {
        return $this->nota;
    }

    //Setter 
    public function setNota($nota) {

        if ($nota >10 || $nota <0) {

        }
    }
}

$alumno = new Alumno ("María, 8");

echo "<p>Alumno: " . $alumno->getNombre() . "</p>";
echo "<p>Nota: " . $alumno->getNota() . "</p>";

$alumno->setNota(9);

echo "<p>Nueva nota: " . $alumno->getNota() . "</p>";