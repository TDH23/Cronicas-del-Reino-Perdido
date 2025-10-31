<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carga las clases de PHPMailer (ajustada a tu carpeta actual)
require __DIR__ . '/PHPMailer-7.0.0/src/Exception.php';
require __DIR__ . '/PHPMailer-7.0.0/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-7.0.0/src/SMTP.php';

// Recibir datos del formulario
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$telefono = $_POST['telefono'] ?? '';
$producto = $_POST['producto'] ?? '';
$cantidad = $_POST['cantidad'] ?? '';
$detalle = $_POST['detalle'] ?? '';

// Crear una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP (Gmail)
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'e8022051@gmail.com';  // Tu correo Gmail
    $mail->Password = 'qmjf vvgh uurm jjyq';       // Tu clave de aplicación (no tu contraseña real)
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Remitente y destinatario
    $mail->setFrom('e8022051@gmail.com', 'Pedidos - Crónicas del Reino Perdido');
    $mail->addAddress('e8022051@gmail.com'); // Destinatario (tú mismo)

    // Contenido del correo
    $mail->isHTML(true);
    $mail->Subject = "🛍️ Nuevo Pedido desde la Web";
    $mail->Body = "
        <h2>Nuevo pedido recibido</h2>
        <p><strong>Nombre:</strong> $nombre</p>
        <p><strong>Correo:</strong> $correo</p>
        <p><strong>Teléfono:</strong> $telefono</p>
        <p><strong>Producto:</strong> $producto</p>
        <p><strong>Cantidad:</strong> $cantidad</p>
        <p><strong>Detalles:</strong> $detalle</p>
    ";

    // Enviar el correo
    $mail->send();
    echo "✅ Pedido enviado correctamente. Gracias por tu solicitud.";

} catch (Exception $e) {
    echo "❌ Error al enviar el pedido. Detalle técnico: {$mail->ErrorInfo}";

    
}


?>
