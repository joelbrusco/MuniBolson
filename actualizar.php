<?php

include "conexion.php";
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$mensajes = $_POST['mensajes'];
$email = $_POST['email'];

$sql = "UPDATE consultas SET nombre = '$nombre', edad=$edad, email ='$email', mensajes='$mensajes' WHERE id = $id";

if ($conexion->query($sql)) {
    header("Location: contacto.php");
} else {
    echo "error en la edcion";
}
