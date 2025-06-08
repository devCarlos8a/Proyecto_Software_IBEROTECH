<!DOCTYPE html>
<html lang="es">
<?php include 'includes/header.php'; ?>
<body>
    <div class="container">
    <h2>Registrarse</h2>
    <form id="registroForm">
        <label for="nombre">Nombre de usuario:</label><br>
        <input type="text" id="nombre" required><br>
        <br>
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" required><br>
        <br>
        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" required><br>
        <br>
        <button type="submit">Registrarse</button>
    </form>
</div>
    <script>
        const form = document.getElementById("registroForm");

        form.addEventListener("submit", function (e) {
            e.preventDefault();

            const nombre = document.getElementById("nombre").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;

            let usuarios = JSON.parse(localStorage.getItem("usuarios")) || [];

            // Validar si el correo ya existe
            const existe = usuarios.some(user => user.email === email);
            if (existe) {
                alert("⚠️ Ya existe un usuario registrado con ese correo.");
                return;
            }

            usuarios.push({ nombre, email, password });
            localStorage.setItem("usuarios", JSON.stringify(usuarios));

            alert("✅ Registro exitoso. Ahora puedes iniciar sesión.");
            window.location.href = "login.php";
        });
    </script>
    <?php include 'includes/footer.php'; ?>

<style> /* Estilos específicos para la página de registro, podrían ir en style.css */
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
</html>
