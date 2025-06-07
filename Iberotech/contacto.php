
<?php include 'includes/header.php'; ?>

<main>
    <div class="container">
        <h2>Contacto</h2>
        <p>Ponte en contacto con nosotros a través del siguiente formulario o información.</p>
        
        <form action="procesar_contacto.php" method="POST">
            <div>
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="mensaje">Mensaje:</label>
                <textarea id="mensaje" name="mensaje" rows="5" required></textarea>
            </div>
            <button type="submit">Enviar Mensaje</button>
        </form>

        <div class="contact-info">
            <h3>Información Adicional</h3>
            <p><strong>Teléfono:</strong> +52 123 456 789</p>
            <p><strong>Email:</strong> contacto@iberotech.com</p>
            <p><strong>Dirección:</strong> Calle Ficticia 123, Bogotá, Colombia</p>
        </div>
    </div>
</main>

<style> /* Estilos específicos para la página de contacto, podrían ir en style.css */
    form div { margin-bottom: 15px; }
    form label { display: block; margin-bottom: 5px; }
    form input[type="text"],
    form input[type="email"],
    form textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    form button {
        padding: 10px 20px;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    form button:hover { background-color: #0056b3; }
    .contact-info { margin-top: 30px; }
</style>

<?php include 'includes/footer.php'; ?>