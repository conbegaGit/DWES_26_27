<?php

echo "<h4>GESTIÓN DE PERSONAS DEL CENTRO</h4>";

// =============================
// CLASE PADRE: PERSONA
// =============================

class Persona
{
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

class Alumno extends Persona
{
    private $curso;
    private $nota;

    public function __construct($nombre, $edad, $curso, $nota)
    {
        // llamamos al constructor de la clase padre
        parent::__construct($nombre, $edad);

        $this->curso = $curso;
        $this->setNota($nota);
    }

    public function getCurso()
    {
        return $this->curso;
    }

    public function getNota()
    {
        return $this->nota;
    }

    // setter de la nota con validación
    public function setNota($nota)
    {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            throw new InvalidArgumentException("La nota debe estar entre 0 y 10");
        }
    }

    public function estaAprobado()
    {
        return $this->nota >= 5;
    }

    // Sobrescribimos el método mágico de Persona
    public function __toString()
    {
        $resultado = $this->estaAprobado()
            ? "APROBADO"
            : "SUSPENSO";

        return parent::__toString() .
            " | Curso: " . $this->curso .
            " | Nota: " . $this->nota .
            " | Resultado: " . $resultado;
    }
}

// =============================
// CLASE HIJA: PROFESOR
// =============================

class Profesor extends Persona {
    
    private $especialidad;

    public function __construct($nombre, $edad, $especialidad) {
        parent::__construct($nombre, $edad);
        $this->especialidad = $especialidad;
    }

    public function __toString(){
        return parent::__toString() .
        " | Especialidad: " . $this->especialidad;
    }
}

// =============================
// CREACIÓN DE OBJETOS
// =============================

try {

    $alumno1 = new Alumno("Ana", 20, "2º DAM", 8);
    $alumno2 = new Alumno("Carlos", 21, "2º DAM", 4);

    $profesor1 = new Profesor(
        "María",
        45,
        "Desarrollo web"
    );

    // =============================
    // CREACIÓN DE OBJETOS
    // =============================

    echo "<h2>Alumnos</h2>";

    echo "<p>$alumno1</p>";
    echo "<p>$alumno2</p>";

    echo "<h2>Profesores</h2>";

    echo "<p>$profesor1</p>";

    // =============================
    // ATRIBUTO ESTÁTICO
    // =============================

    echo "<h2>Estadísticas</h2>";

    echo "<p>Total de personas creadas: 
        ". Persona::getContador() ."</p>";

} catch (InvalidArgumentException $e) {
    echo "<p>Error: ". $e->getMessage() ."</p>";
}