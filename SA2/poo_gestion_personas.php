<?php

echo "<h4>GESTIÓN DE PERSONAS DEL CENTRO</h4>";

class Persona {
    const EDAD_MINIMA = 0;

    private $nombre;
    private $edad;

    private static $contador = 0;

    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;

        self::$contador++;
    }
}