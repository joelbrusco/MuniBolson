<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transito - El Bolson 🗻</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- barra navegacion -->
    <?php include 'navbar.php' ?>

    <div class="contacto">
        <h1>Contacto</h1>
        <div class="separador"></div>
        <ul class="contacto-lista">
            <li>
                <p>Teléfono: 0294 449-2204</p>
            </li>
            <li>
                <p>Dirección: Gral. Roca 689, El Bolsón, Río Negro</p>
            </li>
            <li>
                <p>Correo: joeljesusbrusco@gmail.com</p>
            </li>
        </ul>
        <!-- mapa de google -->
       <iframe class="mapa-responsive" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d47465.79493397752!2d-71.56514570871539!3d-41.96566436524138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x961bbe292d49ca89%3A0xa4fcd4026336e0f6!2zRWwgQm9sc8OzbiwgUsOtbyBOZWdybw!5e0!3m2!1ses-419!2sar!4v1759774873846!5m2!1ses-419!2sar" style="border:0;"
         allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <form method="post" action = "procesar_formulario.php">
        <h1 style="color:white";>Envianos tu consulta</h1>
        <p>nombre</p>
        <input type="text" name="nombre" required>
        <p>edad</p>
        <input type="number" name="edad" required>
        <p>email</p>
        <input type="email" name="email" required>
        <p>mensajes</p>
        <textarea name="mensajes" rows="10" cols="50" maxlength="200" required></textarea>
        <input type="submit" value="enviar">
    </form>
    </div>
    <?php
    include "mostrar_consultas.php";
    ?>

    <!-- footer / pie de pagina -->
    <?php include 'footer.php' ?>

</body>

</html>