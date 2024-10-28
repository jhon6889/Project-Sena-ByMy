<link rel="stylesheet" href="/views/assets/css/style.css"> 

<div class="sidebar">
    <br><br><br><br>
    <h2 class="sidebar-title">Administrar</h2>
    <ul class="sidebar-links">
        <br><br>
        <li><a href="#">Dashboard</a></li>
        <li><a href="#">Gestión de Usuarios</a></li>
        <li><a href="#">Gestión de admin</a></li>
        <li><a href="#" id="top-button">Cambio de Top</a></li> 
        <li><a href="#">Cerrar Sesión</a></li>
    </ul>
</div>

<div id="form-container" style="display:none;">
    <h3>Cambiar Color del Top</h3>
    <form id="color-form">
        <label for="color">Selecciona un color:</label>
        <input type="color" id="color" name="color" required>
        <button type="submit">Cambiar Color</button>
    </form>
</div>

<!-- Cambiar el color del top (navbar) al enviar el formulario -->
<script>

   // muestro el formulario ocuolto
   document.getElementById('top-button').addEventListener('click', function() {
        document.getElementById('form-container').style.display = 'block';
    });


    document.getElementById('color-form').addEventListener('submit', function(event) {
        event.preventDefault();
        const color = document.getElementById('color').value;
        localStorage.setItem('navbarColor', color); // Guardar el color en localStorage
        
        // Cambiar el fondo completo del navbar (sobrescribe el gradiente)
        const navbar = document.getElementById('navbar');
        navbar.style.background = color; // Cambiar el background en lugar de solo backgroundColor
    });
</script>
