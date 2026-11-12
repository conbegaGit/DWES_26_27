<?php
    echo "<h4>Crear objetos con Atributos private</h4>";

    class Alumno {
        private $nombre;
        private $nota;

        public function __construct($nombre,$nota) {
            $this->nombre = $nombre;
            $this->setNota($nota);
        }

        public function getNombre() {
            return $this->nombre;
        }

        public function getNota() {
            return $this->nota;
        }

        public function setNombre($nombre) {
            $this->nombre = $nombre;
        }

        public function setNota($nota) {
            $this->nota = $nota;
        }
    }

    $alumno = new Alumno("María",8);

    echo "<p>Alumno: ". $alumno->getNombre()."</p>";
    echo "<p>Nota: ". $alumno->getNota()."</p>";

    $alumno->setNota(9);

    echo "<p>Nota: ". $alumno->getNota()."</p>";