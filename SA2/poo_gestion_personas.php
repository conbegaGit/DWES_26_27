<?php

echo "<h4>1. Gestión de personas del centro</h4>";

class Persona{
    const EDAD_MINIMA=0;

    private $nombre;
    private $edad;

    private static $contador = 0;

    public function __construct($nombre, $edad){
        $this->$nombre=$nombre;
        $this->$edad=$edad;

        self::$contador++;
    }

    public function getNombre(){
        return $this->$nombre;
    }
    public function setNombre($nombre){
        $this->$nombre=$nombre;
    }

    public function getEdad(){
        return $this->$edad;
    }
    public function setEdad($edad){
        if ($this->edad >= self::EDAD_MINIMA){
            $this->$edad=$edad;
        }
        else {
           throw new InvalidArgumentException("La edad no puede ser negativa");
        }
    }

    public static function getContador(){
        return self::$contador;
    }

    public function __toString(){
        return "Nombre: " . $this->$nombre . 
               " | Edad: " . $this->$edad . "años"; 
    }
}


class Alumno extends Persona{
    private $curso;
    private $nota;

    public function __construct($nombre, $edad, $curso, $nota){
        parent::__Construct($nombre, $edad);

        $this->$curso=$curso;   
        $this->setNota($nota);
    }

    public function getCurso(){
        return $this->$curso;
    }

    public function getNota(){
        return $this->$nota;
    }
    public function setNota($nota){
        if ($nota >= 0 && $nota <= 10){
            $this->$nota=$nota;
        }
        else {
            throw new InvalidArgumentException("La nota debe estar entre 0 y 10");
        }
    }

    public function estaAprobado(){
        return $this->$nota >= 5;
    }
}