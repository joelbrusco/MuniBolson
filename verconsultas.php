<?php

include 'conexion.php';

$sql = "SELECT * FROM consultas";
$resultado = $conexion->query($sql);

if ($resultado && $resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $identificador = (int)$fila['id'];
        // Cada nota es un hijo del grid:

        echo "<h2>" . $fila['nombre'] . "-"  .  $fila['edad'] . "</h2>";



        echo $fila['mensajes'];
        echo "<br>";
        echo $fila['email'];
        echo "<br>";
        echo "<a href='eliminar.php?id={$identificador}'>Eliminar</a><br>";
        echo "<a href='editar.php?id={$identificador}'>Editar</a>";
        echo "<hr>";
    }
} else {
    echo "<p>No hay notas creadas</p>";
}
