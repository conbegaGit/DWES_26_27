<?php

// =====================================
// CLASE PADRE: PERSONA
// =====================================

class Persona {

    // Constante de la clase
    const EDAD_MINIMA = 0;

    // Atributos privados
    private $nombre;
    private $edad;

    // Atributo estático: pertenece a la clase y es compartido por todas sus instancias
    private static $contador = 0;

    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->setEdad($edad);

        self::$contador++;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    public function setEdad($edad){
        if ($edad >= self::EDAD_MINIMA){
            $this->edad = $edad;
        } else {
            throw new InvalidArgumentException(
                "La edad no puede ser negativa."
            );
        }
    }

    // Método estático
    public static function getContador() {
        return self::$contador;
    }
}

// =====================================
// CLASE HIJA: ALUMNO
// =====================================

class Alumno extends Persona{

    private $curso;
    private $nota;

    public function __construct($nombre, $edad, $curso, $nota){
        // Llama al constructor de la clase padre (Persona)
        parent::__construct($nombre, $edad);

        $this->curso = $curso;
        $this->setNota($nota);
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getNota(){
        return $this->nota;
    }

    public function setCurso($curso){
        $this->curso = $curso;
    }

    public function setNota($nota){
        if($nota >= 0 && $nota <= 10){
            $this->nota = $nota;
        }else{
            throw new InvalidArgumentException(
                "La nota tiene que estar entre 0 y 10."
            );
        }
    }
}

// =====================================
// CLASE HIJA: PROFESOR
// =====================================
// (pendiente: en el repositorio del profesor aún no está hecha)
