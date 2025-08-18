<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
     <title>Navbar Responsive</title>
</head>
<body>
     <nav class="navbar">
    <div class="logo">Mi Sitio</div>
    <div class="menu-toggle" id="menu-toggle">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <div class="menu" id="menu">
      <a href="#">Inicio</a>
      <a href="#">Servicios</a>
      <a href="#">Acerca</a>
      <a href="#">Contacto</a>
    </div>
  </nav>

  <script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggle.addEventListener('click', () => {
      menu.classList.toggle('active');
    });
  </script>
</body>
</html>