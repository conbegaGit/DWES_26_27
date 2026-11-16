<?php

echo "<h4>GESTIÓN DE PERSONAS DEL CENTRO</h4>";

//CLASE PADRE: PERSONA
class Persona{
    //Constante de la clase
    const EDAD_MINIMA = 0;
    //Atributos privados
    private $nombre;
    private $edad;
    //Atributo estatico: Pertenece a la clase y es compartido por todas sus isntancias.
    private static $contador = 0;
    //Constructor
    public function __construct($nombre, $edad){
        $this->nombre = $nombre;
        $this->edad = $edad;
        //Cada vez que se crea una Persona, aumenta el contador.
        self::$contador++;
    }
    //Getter del nombre
    public function getNombre(){
        return $this->nombre;
    }
    //Setter del nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }
    //Getter de la edad
    public function getEdad(){
        return $this->edad;
    }
    //Setter en la edad con validación
    public function setEdad($edad){
        if($edad >= self::EDAD_MINIMA){
            $this->edad = $edad;
        } else {
            throw new InvalidArgumentException("La edad no puede ser negativa.");
        }
    }
    //Método estático
    public static function getContador(){
        return self::$contador;
    }
    //Método mágico __toString() para representar el objeto como cadena
    public function __toString(){
        return "Nombre: " . $this->nombre . "| Edad: " . $this->edad;
    }
}

//CLASE HIJA: ALUMNO
class Alumno extends Persona{
    private $curso;
    private $nota;

    public function __construct($nombre, $edad, $curso, $nota){
        //Llamamos al constructor de la clase padre.
        parent::__construct($nombre, $edad);
        $this->curso = $curso;
        $this->nota = $nota;
    }

    public function getCurso(){
        return $this->curso;
    }

    public function getNota(){
        return $this->nota;
    }

    public function setNota($nota){
        if($nota >= 0 && $nota <= 10){
            $this->nota = $nota;
        } else {
            throw new InvalidArgumentException("La nota debe estar entre 0 y 10.");
        }
    }

    public function estarAprobado(){
        return $this->nota >= 5;
    }

    //
}