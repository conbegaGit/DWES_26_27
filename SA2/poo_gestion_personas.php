<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

        // Atributo estático: un atributo estático pertenece a la clase y es compartido por todas sus instancias
        private static $contador = 0; // solo puede existir un atributo estatico por clase.

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
        // Metodo estático
        public static function getContador() {
            return self::$contador;
        }

        public function __toString() {
            return  "Nombre: " . $this->nombre .
                    " | Edad: " . $this->edad . "años";
        }
    }

    // =====================================
    // CLASE HIJA: ALUMNO
    // =====================================

    class Alumno extends Persona{
        
        private $curso;
        private $nota;


        public function __construct($nombre, $edad, $curso, $nota){
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
                    "La nota no puede no estar entre el intervalo del 0 - 10."
                );
            }
        }

        public function estaAprovado(){
            $resultado = $this->estaAprobado()
            ? "APROBADO"
            : "SUSPENSO";

            return parent:: __toString() .
                    " | Curso: " . $this->curso . 
                    " | Nota: " . $this->nota .
                    " | Resultado: " . $resultado;
        }

    }

    // =====================================
    // CLASE HIJA: PROFESOR
    // =====================================
    
    class Profesor extends Persona{
        private $especialidad;

        public function __construct($nombre, $edad, $especialidad){
            parent::__construct($nombre, $edad);
            $this->especialidad = $especialidad;
        }

        public function __toString() {
            return parent:: __toString() .
            " | Especialidad: ". $this->especialidad;
        }
        
    }

    // =====================================
    // CREACIÓN DE OBJETOS
    // =====================================

    try {

    $alumno1 = new Alumno("Jeremy", 19, "2º DAM", 8);
    $alumno2 = new Alumno("Carlos", 21, "2º DAM", 4);

    $profesor1 = new Profesor(
        "María",
        45,
        "Desarrollo web"
    );

    // =====================================
    // MOSTRAR INFORMACIÓN DE LOS OBJETOS
    // =====================================

    echo "<h2>Alumnos</h2>";

    // __toString() se ejecuta automáticamente
    // cuando mostramos un objeto como texto
    echo "<p>$alumno1</p> <br>";

    echo "<p>$alumno2</p> <br>";

    echo "<h2>Profesor</h2>";

    echo "<p>$profesor1</p> <br>";


    // =====================================
    // ATRIBUTO ESTÁTICO
    // =====================================

    echo "<h2>Estadísticas</h2>";

    echo "<p>Total de personas creadas " .
        Persona::getContador() . "</p>";

    }catch(Exception $e) {

    }
    ?>
</body>
</html>