<?php
    /*si vamal redirige a principal.php
    si va mal, mesaje de error */
    if ($_POST["usuario"] === "nacho" and $_POST["clave"] === "1234"){
        header("Location:Bienvenido.html");
    } else {
        header("Location:error.html");
    }