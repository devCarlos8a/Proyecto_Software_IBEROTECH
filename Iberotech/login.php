<!DOCTYPE html>
<html lang="es">
<?php include 'includes/header.php'; ?>
<body>
    <h2>Iniciar sesión</h2>
    <form id="loginForm">
        <label for="email">Correo electrónico:</label><br>
        <input type="email" id="email" required><br>

        <label for="password">Contraseña:</label><br>
        <input type="password" id="password" required><br>

        <button type="submit">Iniciar sesión</button>
    </form>
 <?php include 'includes/footer.php'; ?>
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
</body>
</html>
