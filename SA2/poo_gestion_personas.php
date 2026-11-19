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
        // Mñetodo estático
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
            parent($nombre, $edad);

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

    }

    // =====================================
    // CLASE HIJA: PROFESOR
    // =====================================
    
    class Profesor extends Persona{
        
        private $asignatura;
        private $sueldo;

        public function __construct($nombre, $edad, $asignatura, $sueldo){
            parent($nombre, $edad);

            $this->asignatura = $asignatura;
            $this->setSueldo($sueldo);
        }

        public function getAsignatura() {
            return $this->asignatura;
        }

        public function getSueldo(){
            return $this->sueldo;
        }

        public function setAsignatura($asignatura){
            $this->asignatura = $asignatura;
        }

        public function setSueldo($sueldo){
            if($sueldo >= 0){
                $this->sueldo = $sueldo;
            }else{
                throw new InvalidArgumentException(
                    "El sueldo no puede ser negativo."
                );
            }
        }
    }
    ?>
</body>
</html>