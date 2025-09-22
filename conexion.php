<?php
$servidor = "localhost";
$usuario = "root";
$contraseña = "";
$basedeDatos = "transito";

$conexion = new mysqli($servidor, $usuario,$contraseña, $basedeDatos);

if ($conexion->connect_error) {
    echo "error de conexion";
}
echo "conectado";
