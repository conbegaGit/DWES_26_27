<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h4>Crear objetos con Atributos private</h4>";

        class Alumno{
            private $nombre;
            private $nota;

            public function __construct($nombre, $nota){
                $this->nombre = $nombre;
                $this->setNota($nota);
            }

            // Getter
            public function getNombre(){
                return $this->nombre;
            }

            //Getter
            public function getNota(){
                return $this->nota;
            }

            // Setter
            public function setNombre($nombre){
                $this->nombre = $nombre;
            }

            // Setter
            public function setNota($nota){
                if ($nota >= 0 && $nota <= 10){
                    $this->nota = $nota;
                }else{
                    echo "<p>La nota debe estar entre 0 y 10</p>";
                }
            }

            // Metodos propios de la clase
            public function mostrarDatos(){
                echo "<p>Nombre: ". $this->nombre ."</p>";
                echo "<p>Nota: ". $this->nota ."</p>";
            }
        }

        $alumno1 = new Alumno("Jeremy Gabriel Pilozo Garcia", 100);
        echo "<p>Alumno: ". $alumno1->getNombre() ."</p>";
        echo "<p>Nota: ". $alumno1->getNota() ."</p>";

        $alumno1->setNota(7);
        $alumno1->mostrarDatos();
    ?>
</body>
</html>