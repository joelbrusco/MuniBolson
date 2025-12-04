<?php
session_start();

// Proteger si no está logueado
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: index.php");
    exit;
}

include "conexion.php";

// Evitar SQL injection (lo casteamos a int)
$id = (int) $_GET['id'];

// Consulta correcta
$sql = "SELECT * FROM consultas WHERE id = $id";
$resultado = $conexion->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();

    $mensajes = $fila['mensajes'];
    $email = $fila['email'];
    $nombre = $fila['nombre'];
    $edad = $fila['edad'];
} else {
    echo "<p>No existe la nota seleccionada</p>";
    exit;
}
?>
<form method="post" action="actualizar.php">
    <input type="hidden" name="id" value="<?php echo $id ?>">

    <h1 style="color:white;">Editar consulta</h1>

    <p>Nombre</p>
    <input type="text" name="nombre" value="<?php echo $nombre ?>" required>

    <p>Edad</p>
    <input type="number" name="edad" value="<?php echo $edad ?>" required>

    <p>Email</p>
    <input type="email" name="email" value="<?php echo $email ?>" required>

    <p>Mensajes</p>
    <textarea name="mensajes" rows="10" cols="50" maxlength="200" required><?php echo $mensajes ?></textarea>

    <br><br>

    <input type="submit" value="Guardar cambios">

    <!-- Botón cancelar -->
    <a href="panel_admin.php" style="margin-left:20px; color:white; background:red; padding:8px 12px; text-decoration:none; border-radius:5px;">
        Cancelar
    </a>
</form>
