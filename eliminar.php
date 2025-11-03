<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "DELETE FROM consultas where id=$id";
if ($conexion->query ($sql)=== true) {
    header("Location: contacto.php");
}
else {
    echo "error en el borrado";
}