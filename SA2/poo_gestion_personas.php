<?php

echo "<h4>GESTIÓN DE PERSONAS DEL CENTRO</h4>";

// =============================
// CLASE PADRE: PERSONA
// =============================

class Persona {
    // constante de la clase
    const EDAD_MINIMA = 0;

    // atributos privados
    private $nombre;
    private $edad;

    // atributo estático: pertenece a la clase y es compartido por todas sus instancias
    private static $contador = 0;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;

        // cada vez que se crea una persona aumenta el contador
        self::$contador++;
    }

    // getter del nombre
    public function getNombre() {
        return $this->nombre;
    }

    // setter del nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    // getter de la edad
    public function getEdad() {
        return $this->edad;
    }

    // setter de la edad con validación
    public function setEdad($edad) {
        if ($edad >= self::EDAD_MINIMA) {
            $this->edad = $edad;
        } else {
            throw new InvalidArgumentException("La edad no puede ser negativa");
        }
    }

    // método estático
    public static function getContador() {
        return self::$contador;
    }

    // método mágico para representar el objeto como cadena
    public function __toString() {
        return "Nombre: " . $this->nombre . " | Edad: " . $this->edad . " años";
    }
}

// =============================
// CLASE HIJA: ALUMNO
// =============================

class Alumno extends Persona {
    private $curso;
    private $nota;

    public function __construct($nombre, $edad, $curso, $nota) {
        // llamamos al constructor de la clase padre
        parent::__construct($nombre, $edad);

        $this->curso = $curso;
        $this->setNota($nota);
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getNota() {
        return $this->nota;
    }

    // setter de la nota con validación
    public function setNota($nota) {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            throw new InvalidArgumentException("La nota debe estar entre 0 y 10");
        }
    }

    public function estarAprobado() {
        return $this->nota >= 5;
    }
}
