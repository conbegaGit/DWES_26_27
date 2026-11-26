<?php
/*Si sale bien redirige a principal.php
si va mal, mensaje de <error></error>*/
if($_POST["usuario"]==="usuario" and $_POST["clave"]==="1234"){
    header("Location:Bienvenido.html");
}else{
    header("Location:Error.html");
}