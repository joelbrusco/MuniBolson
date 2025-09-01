<nav class="navbar">
    <div class="logo">Infraccicones</div>
    <div class="menu-toggle" id="menu-toggle">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <div class="menu" id="menu">
        <a href="#">Inicio</a>
        <a href="#">Infracciones</a>
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