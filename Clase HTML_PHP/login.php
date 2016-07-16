<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

if (($usuario === "edgarlizcano")&&($clave === "12345")){
    header('Location:home.html');
}else{
    header('Location:salida.html');
}
?>