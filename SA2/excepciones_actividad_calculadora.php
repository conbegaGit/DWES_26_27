<?php
    echo "<h4>CALCULADORA</h4>";
    
    $numero1 = 20;
    $numero2 = 0;
    try {
        if (!is_numeric($numero1) || !is_numeric($numero2)) {
            throw new InvalidArgumentException("Argumento invalido");
        }

        if ($numero2 == 0) {
            throw new DivisionByZeroError("Numero 2 no puede ser 0");
        }
        $resultado = $numero1 / $numero2;

        echo "<p>Resultado: $resultado</p>";

    } catch (InvalidArgumentException $e) {
        echo "<p>Error: ". $e->getMessage()."</p>";
    } catch (DivisionByZeroError $e) {
        echo "<p>Error: ". $e->getMessage()."</p>";
    } finally {
        echo "<p>Calculadora finalizada</p>";
    }