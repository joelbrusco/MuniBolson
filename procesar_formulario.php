<?php
include "conexion.php";
$nombre = $_POST["nombre"];
$edad = $_POST["edad"];
$email = $_POST["email"];
$mesajes = $_POST["mensajes"];

$sql = "INSERT INTO consultas (nombre,edad,email,mensajes) VALUES ('$nombre', $edad, '$email', '$mesajes')";

if ($conexion->query($sql)) {
    echo "notas creada";
} else {
    echo "Error en la conexion";
}
