<?php
include 'conexion.php';

$sql = "SELECT * FROM consultas";
$resultado = $conexion->query($sql);
echo "<div class='comentarios'>";
if ($resultado && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $identificador = (int)$fila['id'];

        echo "<div class='notas'>";   // ← corregido, ahora se abre bien

        echo "<h2>" . $fila['nombre'] . " - " . $fila['edad'] . "</h2>";
        echo "<p>" . $fila['mensajes'] . "</p>";
        echo "<p>" . $fila['email'] . "</p>";

        echo "<a href='eliminar.php?id={$identificador}'>Eliminar</a><br>";
        echo "<a href='editar.php?id={$identificador}'>Editar</a>";

        echo "</div>";  // ← AHORA SE CIERRA CORRECTAMENTE
        echo "<hr>";
    }
} else {
    echo "<p>No hay notas creadas</p>";
}

echo "</div>";
