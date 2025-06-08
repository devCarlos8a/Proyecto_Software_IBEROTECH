<!DOCTYPE html>
<html lang="es">
<?php include 'includes/header.php'; ?>
<body>
    <div class="container">
    <h2>Iniciar sesión</h2>
        <form id="loginForm">
            <label for="email">Correo electrónico:</label><br>
            <input type="email" id="email" required><br>

            <label for="password">Contraseña:</label><br>
            <input type="password" id="password" required><br>

            <button type="submit">Iniciar sesión</button>
        </form>
    </div>
    <script>
        const form = document.getElementById("loginForm");

        form.addEventListener("submit", function(e) {
            e.preventDefault();

            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            const usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

            const usuarioEncontrado = usuarios.find(user => user.email === email && user.password === password);

            if (usuarioEncontrado) {
                localStorage.setItem("usuarioActivo", JSON.stringify(usuarioEncontrado));

                alert("✅ Inicio de sesión exitoso.");
                window.location.href = "catalogo.php";
            } else {
                alert("❌ Correo o contraseña incorrectos.");
            }
        });
    </script>
<style> /* Estilos específicos para la página de login, podrían ir en style.css */
    form div { margin-bottom: 15px; }
    form label { display: block; margin-bottom: 5px; border: 1px solid #ccc;width: 40%; }
    form input[type="text"],
    form input[type="password"],
    form input[type="email"]{
        width: 40%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    
    form button {
        padding: 10px 20px;
        background-color:rgb(53, 173, 99);
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    form button:hover { background-color:rgb(36, 130, 72); }
    .contact-info { margin-top: 30px; }
</style>
</body>
<?php include 'includes/footer.php'; ?>
</html>
