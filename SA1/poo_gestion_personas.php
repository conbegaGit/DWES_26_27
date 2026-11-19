<?php

echo "<h4>GESTIÓN DE PERSONAS DEL CENTRO</h4>";

// ============================================
// CLASE PADRE: PERSONA
// ============================================

class Persona {
    // Constante de la clase
    const EDAD_MINIMA = 0;

    // Atributos privados
    private $nombre;
    private $edad;

    // Atributo estático: Un atributo estático pertenece a la clase y es compartido por todas sus instancias
    private static $contador = 0;

    // Constructor
    public function __Construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->setEdad($edad);

        // Cada vez que se crea una persona, aumenta el contador
        self::$contador++;
    }

    // Getter del nombre
    public function getNombre() {
        return $this->nombre;
    }

    // Setter del nombre
    public function setNombre ($nombre) {
        $this->nombre = $nombre;
    }

    // Getter de la edad
    public function getEdad() {
        return $this->edad;
    }

    // Setter de la edad con validación
    public function setEdad($edad) {
        if ($edad >= self::EDAD_MINIMA) {
            $this->edad = $edad;
        } else {
            throw new InvalidArgumentException(
                "La edad no puede ser negativa."
            );
        }
    }

    // Método estático, no depende de una instancia específica de la clase, sino que pertenece a la clase en sí. Se puede llamar sin crear un objeto de la clase.
    public static function getContador() {
        return self::$contador;
    }

    // Método mágico
    public function __toString() {
        return "Nombre: " . $this->nombre .
            " | Edad " . $this->edad . " años";
    }
}

// ============================================
// CLASE HIJA: ALUMNO
// ============================================

class Alumno extends Persona {

    private $curso;
    private $nota;

    public function __construct($nombre, $edad, $curso, $nota) {
        // Llamamos al constructor de la clase padre
        parent::__construct($nombre, $edad);

        $this->curso = $curso;
        $this->Setnota($nota);
    }

    public function getCurso() {
        return $this->curso;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        if ($nota >= 0 && $nota <= 10) {
            $this->nota = $nota;
        } else {
            throw new InvalidArgumentException(
                "La nota debe estar entre 0 y 10."
            );
        }
    }

    public function estaAprobado() {
        return $this->nota >= 5;
    }

    // Sobrescribimos el método mágico de Persona
    public function __toString() {

        $resultado = $this->estaAprobado()
            ? "APROBADO"
            : "SUSPENSO";

        // Método mágico
        return parent::__toString() . 
            " | Curso: " . $this->curso .
            " | Nota " . $this->nota .
            " | Resultado: " . $resultado;
    }
}

// =======================
// CLASE HIJA: PROFESOR
// =======================

class Profesor extends Persona {

    private $especialidad;

    public function __construct($nombre, $edad, $especialidad) {
        parent::__construct($nombre, $edad);
        $this->especialidad = $especialidad;
    }

    public function __toString() {
        return parent::__toString() .
            " | Especialidad: " . $this->especialidad;
    }
}              

// ========================
// CREACIÓN DE OBJETOS
// ========================

try {
    $alumno1 = new Alumno("Ana", 20, "2º DAM", 8);
    $alumno2 = new Alumno("Carlos", 21, "2ºDAM", 4);

    $profesor1 = new Profesor(
        "María",
        45,
        "Desarrollo Web"
    );

    // ====================
    // MOSTRAR INFORMACIÓN
    // ====================

    echo "<h2>Alumno</h2>";

    // __toString() se ejecuta automáticamente
    // cuando mostramos un objeto como texto

    echo "<p>$alumno1</p>";
    echo "<p>$alumnno2</p>";

    echo "<h2>Profesores</h2>";

    echo "<p>$profesor1</p>";

    // ====================
    // ATRIBUTO ESTÁTICO
    // ====================

    echo "<h2>Estadísticas</h2>";

    echo "<p>Total de personas creadas:</p>";

    $personas = [
        $alumnno1,
        $alumnno2,
        $profesor1
    ];

    foreach ($personas as $persona) {
        // Cada objeto utiliza su propia versión del método __ToString()
        echo "<p>" . $persona . "</p>";
    }
} catch (InvalidArgumentException $e) {
    echo "<p>Error: " . $e -> getMessage() . "</p>";
}

?>