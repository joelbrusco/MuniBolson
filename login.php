<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'?>
    <form action="procesar_login.php" method="post">
        <p>Usuario</p>
        <input type="text" name="usuario">
        <p>Contraseña</p>
        <input type="password" name="pass">
        <button>Iniciar Sesion</button>
    </form>
</body>
</html>