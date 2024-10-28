<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/views/assets/css/style.css"> <!-- Enlace al CSS -->
    <title>Mi Sitio</title>
</head>
<body>

    <!-- Barra de navegación -->
    <div class="navbar" id="navbar">
        <div class="logo">
            <a href="#" class="text-white">Mi Sitio</a>
        </div>
        <div class="menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="links">
            <a href="#">Ingresar</a>
            <a href="#">Crear Cuenta</a>
        </div>
        <div class="social-icons">
            <a href="https://facebook.com" target="_blank" class="text-white">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://youtube.com" target="_blank" class="text-white">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="https://twitter.com" target="_blank" class="text-white">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="https://instagram.com" target="_blank" class="text-white">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>

    <!-- Scripts -->
    <script>
        // Código para mostrar/ocultar el menú hamburguesa
        const menuToggle = document.querySelector('.menu-toggle');
        const links = document.querySelector('.links');

        menuToggle.addEventListener('click', () => {
            links.classList.toggle('active');
        });

		document.addEventListener('DOMContentLoaded', function() {
        const savedColor = localStorage.getItem('navbarColor');
        if (savedColor) {
            document.getElementById('navbar').style.background = savedColor; // Aplicar el color al background completo
        }
    });
    </script>
</body>
</html>
