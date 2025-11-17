<?php
include "conexion.php";

$id = $_GET['id'];

$sql = "SELECT FROM consultas.php WHERE id=$id";

$sql = "SELECT * FROM consultas";
$resultado = $conexion->query($sql);

if ($resultado && $resultado->num_rows > 0) {


    while ($fila = $resultado->fetch_assoc()) {
        $mensajes = $fila['mensajes'];
        $email = $fila['email'];
        $nombre = $fila['nombre'];
        $edad = $fila['edad'];
    }
} else {
    echo "<p>no hay notas creadas </p>";
}
?>
<form method="post" action="actualizar.php">
    <input type="hidden" name=id value=<?php echo $id ?>>
    <h1 style="color:white" ;>Envianos tu consulta</h1>
    <p>nombre</p>
    <input type="text" name="nombre" value=<?php echo $nombre ?> required>
    <p>edad</p>
    <input type="number" name="edad" value=<?php echo $edad ?> required>
    <p>email</p>
    <input type="email" name="email" value=<?php echo $email ?> required>
    <p>mensajes</p>
    <textarea name="mensajes" rows="10" cols="50" maxlength="200" required><?php echo $mensajes ?></textarea>
    <input type="submit" value="enviar">
</form>