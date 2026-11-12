<?php
echo"<h4>Crear objetos con Atributos private</h4>"; 
echo"<hr>";
class Alumno{
    private $nombre;
    private $nota;
    public function __construct($nombre, $nota){
        $this->nombre = $nombre;
        $this->nota = $nota;
    }
    // Getter para obtener el valor del atributo nombre
    public function getNombre(){
        return $this->nombre;
    }

    // Setter para establecer el valor del atributo nombre
    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

    // Getter para obtener el valor del atributo nota
    public function getNota(){
        return $this->nota;
    }

    // Setter para establecer el valor del atributo nota
    public function setNota($nota){
        $this->nota = $nota;
    }
    public function mostrarDatos(){
        echo"<p>Nombre: " . $this->nombre ."</p>";
        echo"<p>Nota: " . $this->nota . "</p>";
    }
}
$alumno1 = new Alumno("Pepe", 6);
echo"Alumno no modificado";
$alumno1 ->mostrarDatos();
$alumno1 ->setNombre("Luna");
$alumno1 ->setNota(8);
echo"<hr>";
echo"<p>Alumno modificado: </p>";
$alumno1 ->mostrarDatos();
