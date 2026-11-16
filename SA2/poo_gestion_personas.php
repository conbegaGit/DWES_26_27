<?php

echo "<h4>Gestión de personas del centro</h4>";

//=============================
//CLASE PADRE: PERSONA
//=============================

class Persona {

    //Constante de la clase
    const EDAD_MINIMA = 0;

    //Atributos privados
    private $nombre;
    private $edad;

    //Atributo estático: un atributo estático pertenece a la clase y es compartido por todas sus instancias
    private static $contador = 0;

    //Constructor
    public function __construct($nombre, $edad) {

        $this->nombre = $nombre;
        $this->setEdad($edad);

        //Cada vez que se crea una persona aumenta el contador
        self::$contador++;

    }

    //Getter del nombre
    public function getNombre() {
        return $this->nombre;
    }

    //Setter del nombre
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    //Getter de la edad
    public function getEdad() {
        return $this->edad;
    }

    //Setter de la edad
    public function setEdad($edad) {
        if ($edad >= self::EDAD_MINIMA) {
            $this->edad = $edad;
        } else {
            throw new InvalidArgumentException(
                "La edad no puede ser negativa"
            );
        }
    }

    //Método estático
    public static function getContador() {
        return self::$contador;
    }

    //método mágico
    public function __toString() {
        return "Nombre: " . $this->nombre . 
            " | Edad: " . $this->edad . " años";
    }


}

//CLASE HIJA: ALUMNO

class Alumno extends Persona {

    private $curso;
    private $nota;

    public function __construct($nombre, $edad, $curso, $nota) {

        //Llamamos al constructor de la clase padre
        parent::_construct($nombre, $edad);

        $this->curso = $curso;
        $this->setNota($nota);
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        
    }
}