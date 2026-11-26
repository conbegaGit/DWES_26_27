<?php

    //echo "Usuario introducido: ".$_POST['usuario']."<br>";
    //echo "Clave introducida: ".$_POST['clave']."<br>";
    //echo "Correo introducido: ".$_POST['c']."<br>";

    if (!isset($_POST['usuario'])||!isset($_POST['clave'])) {
        echo "ERROR: debes introducir usuario y contraseña";
    } elseif (empty($_POST['usuario'])||empty($_POST['clave'])) {
        echo "ERROR: los campos son obligatorios";
    } elseif (!filter_var($_POST['c'], FILTER_VALIDATE_EMAIL)) {
        echo "ERROR: el correo electronico no tiene un formato válido";
    }