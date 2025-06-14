// js/script.js
document.addEventListener('DOMContentLoaded', function() {
    console.log('Documento cargado y listo!');

    // Ejemplo: Alerta al hacer clic en el botón de registro
    const registerButton = document.querySelector('.btn-register');
    if (registerButton) {
    registerButton.addEventListener('click', function () {
        window.location.href = 'registro.php';
    });
}

    const loginButton = document.querySelector('.btn-login');
    if(loginButton) {
        loginButton.addEventListener('click', function() {
            window.location.href = 'login.php';
        });
    }

    // Puedes añadir más interactividad aquí:
    // - Un carrusel para las imágenes de servicios.
    // - Validaciones de formularios.
    // - Efectos visuales.
});