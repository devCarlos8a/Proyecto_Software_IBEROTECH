<?php
require_once '../src/PHPMailer/PHPMailer.php';
require_once '../src/PHPMailer/SMTP.php';
require_once '../src/PHPMailer/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Captura de datos del formulario
$nombre = htmlspecialchars($_POST['nombre']);
$email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
$mensaje = htmlspecialchars($_POST['mensaje']);

if (!$email) {
    echo "❌ Email inválido.";
    exit;
}

$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'rentasiberotech@gmail.com'; // Cambia por tu correo real
    $mail->Password = 'pnxf euxu ywlu mmbi'; // Usa clave de aplicación, no tu contraseña normal
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;
    
    $mail->setFrom($email, $nombre);
    $mail->addAddress('rentasiberotech@gmail.com', 'Soporte Iberotech');

    $mail->isHTML(false);
    $mail->Subject = 'Nuevo mensaje desde el formulario de contacto';
    $mail->Body    = "Nombre: $nombre\nEmail: $email\nMensaje:\n$mensaje";
    $mail->send();

    echo "<script>
        alert('✅ Mensaje enviado correctamente. Pronto nos comunicaremos contigo');
        window.location.href = '../index.php';
    </script>";

} catch (Exception $e) {
    echo "<script>
        alert('❌ Error al enviar el mensaje: " . $mail->ErrorInfo . "');
        window.history.back();
    </script>";
}
?>
