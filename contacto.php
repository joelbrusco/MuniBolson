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
                <p>Correo: consultas@elbolson.gov.ar.</p>
            </li>
        </ul>
        <!-- mapa de google -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1048.8735067079674!2d-71.53293834876627!3d-41.96458856133914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2sar!4v1757610114571!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <form action="post" action = "procesar_formulario.php">
        <h1 style="color:white";>Envianos tu consulta</h1>
        <p>nombre</p>
        <input type="text" name="nombre" required>
        <p>edad</p>
        <input type="number" name="edad" required>
        <p>email</p>
        <input type="email" name="correo" required>
        <p>mensajes</p>
        <textarea name="mensaje" rows="10" cols="50" maxlength="200" required></textarea>
        <input type="submit" value="enviar">
    </form>
    </div>

    <!-- footer / pie de pagina -->
    <?php include 'footer.php' ?>

</body>

</html>