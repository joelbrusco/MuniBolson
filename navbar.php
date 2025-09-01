<nav class="navbar">
    <div class="logo">SIGTM–Bolsón</div>
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
    </div>
</nav>




<script>
    const toggle = document.getElementById('menu-toggle');
    const menu = document.getElementById('menu');

    toggle.addEventListener('click', () => {
        menu.classList.toggle('active');
    });
</script>