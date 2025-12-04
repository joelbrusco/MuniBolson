<?php
include 'conexion.php';

$id = $_GET['id'];
$sql = "DELETE FROM consultas where id=$id";
if ($conexion->query ($sql)=== true) {
    header("Location: panel_admin.php");
}
else {
    echo "error en el borrado";
}