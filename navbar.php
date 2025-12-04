<nav class="navbar">
    <a href="index.php"> 
        <div class="logo">SIGT–Bolsón</div>
    </a>
    <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="menu" id="menu">
        <a href="index.php">Inicio</a>
        <a href="infracciones.php">Infracciones</a>
        <a href="acerca.php">Acerca</a>
        <a href="contacto.php">Contacto</a>
        <a href="login.php">Login</a>
    

    </div>
</nav>

<!-- Javascript - No Tocar -->
<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
</script>