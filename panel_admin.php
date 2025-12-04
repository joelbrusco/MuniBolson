<?php
session_start();

// Si no está logueado, lo mando al login
if (!isset($_SESSION['logueado']) || $_SESSION['logueado'] !== true) {
    header("Location: index.php");
    exit;
}

include 'conexion.php';

$sql = "SELECT * FROM consultas";
$resultado = $conexion->query($sql);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <h1>Panel de administración</h1>
    <p>Hola, <?php echo htmlspecialchars($_SESSION['usuario']); ?></p>
    <p><a href="logout.php">Cerrar sesión</a></p>

    <?php
    echo "<div class='comentarios'>";
    if ($resultado && $resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $identificador = (int)$fila['id'];

            echo "<div class='notas'>";
            echo "<h2>" . $fila['nombre'] . " - " . $fila['edad'] . "</h2>";
            echo "<p>" . $fila['mensajes'] . "</p>";
            echo "<p>" . $fila['email'] . "</p>";

            echo "<a href='eliminar.php?id={$identificador}'>Eliminar</a><br>";
            echo "<a href='editar.php?id={$identificador}'>Editar</a>";

            echo "</div>";
            echo "<hr>";
        }
    } else {
        echo "<p>No hay consultas creadas</p>";
    }
    echo "</div>";
    ?>

</body>
</html>
