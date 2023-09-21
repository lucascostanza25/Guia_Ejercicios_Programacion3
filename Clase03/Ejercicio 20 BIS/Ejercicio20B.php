<?php
include_once('Usuario.php');

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $nombre = $_POST['nombre'];
    $clave = $_POST['clave'];
    $mail = $_POST['mail'];

    // Crear un objeto Usuario
    $usuario = new Usuario($nombre, $clave, $mail);
    Usuario::guardarUsuario($usuario);
}
else
{
    echo "Mal";
}