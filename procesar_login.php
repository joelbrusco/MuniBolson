<?php
session_start();

// Datos fijos
$usuarioCorrecto = "admin";
$contrasenaCorrecta = "1234";

// Datos enviados
$usuario = $_POST['usuario'] ?? '';
$pass = $_POST['pass'] ?? '';

// Validar
if ($usuario === $usuarioCorrecto && $pass === $contrasenaCorrecta) {
    // Guardar sesión
    $_SESSION['logueado'] = true;
    $_SESSION['usuario'] = $usuario;

    // Redirigir al panel
    header("Location: panel_admin.php");
    exit;
} else {
    // Login incorrecto
    echo "<h3>Usuario o contraseña incorrectos</h3>";
    echo "<a href='index.php'>Volver</a>";
}
?>
