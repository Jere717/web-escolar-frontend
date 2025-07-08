<footer class="footer">

    <div class="grupo-1">
        <div class="footer-grass">
            <img src="../public/images/cesped (1).webp" alt="Pasto" class="grass-image">
        </div>
    </div>

    <div class="grupo-2">

        <p>&copy; 2024-2025 <a href="<?php echo BASE_URL ?>/idea-y-desarrollo/">Idea y desarrollo</a></p>

    </div>

</footer>

<script>
    function showAlert() {
    alert('El enlace esta deshabilitado por un tiempo');
    return false;
    }

    function pillarOveja() {
    alert('¡Has pillado a la oveja!');
    return false;
    }

    document.addEventListener('DOMContentLoaded', function () {
        const menuToggle = document.getElementById('menu-toggle');
        const menuIconoAnimacion = document.getElementById('menu-icono-animacion');
        const menuContent = document.getElementById('menu-content');

        menuToggle.addEventListener('click', function () {
        // Alterna la clase activa en el contenido del menú
        menuContent.classList.toggle('active');
        menuIconoAnimacion.classList.toggle('no-animation');

        // Cambia el color según el estado del menú
        menuToggle.style.color = menuContent.classList.contains('active') ? '#f2fd28' : '#ffffff';
        });

        // Cierra el menú al hacer clic fuera de él
        document.addEventListener('click', function (event) {
        if (!menuContent.contains(event.target) && !menuToggle.contains(event.target)) {
            menuContent.classList.remove('active');
            menuIconoAnimacion.classList.remove('no-animation');
            menuToggle.style.color = '#ffffff';
        }
        });
    });
</script>