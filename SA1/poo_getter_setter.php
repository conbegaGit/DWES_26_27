<?php

echo "<h4>Crear objetos con Atributos private</h4>";

class Alumno{
    private $nombre;
    private $nota;

    public function __construct($nombre, $nota){
        $this->nombre = $nombre;
        $this->nota = $nota;
    }

    //Getter
    public function getNombre(){
        return $this->nombre;
    }

    //Getter
    public function getNota(){
        return $this->nota;
    }

    //Setter

    public function setNota($nota){
        if($nota >= 0 && $nota <= 10){
            $this->nota = $nota;
        } else {
            echo"<p>La nota debe estar entre 0 y 10.</p>";
        }
    }

}

$alumno = new Alumno("Pedro", 8);

echo "<p>Alumno: " .$alumno->getNombre()."</p>";
echo "<p>Nota: " .$alumno->getNota()."</p>";

$alumno->setNota(9);

echo "<p>Nota nueva: " .$alumno->getNota()."</p>";