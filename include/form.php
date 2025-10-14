<?php
// Incluir las clases de PHPMailer
// Asegúrate de que esta ruta sea correcta en tu servidor

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// Definir los datos de la cuenta de Gmail/SMTP
// **ATENCIÓN: Reemplaza estos valores con tu Contraseña de Aplicación y tu correo**
define('SMTP_USER', 'infotallereslopezfuertes@gmail.com');
define('SMTP_PASS', 'rhlf irky dqca hbbo');
define('DESTINATION_EMAIL', 'infotallereslopezfuertes@gmail.com');
define('SITE_NAME', 'Talleres López Fuertes');


// Función para enviar correos usando SMTP de Gmail
function sendEmail($to, $subject, $body, $is_html = true)
{
	$mail = new PHPMailer(true);
	try {
		// Configuración del Servidor SMTP (Gmail)
		// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = SMTP_USER;
		$mail->Password = SMTP_PASS;
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Usar SMTPS
		$mail->Port = 465;

		// Configuración de Envío
		$mail->setFrom(SMTP_USER, SITE_NAME);
		$mail->addAddress($to);
		$mail->isHTML($is_html);
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->CharSet = 'UTF-8';

		return $mail->send(); // Retorna true si se envía correctamente
	} catch (Exception $e) {
		// En caso de error, puedes registrarlo o devolver un mensaje de error
		error_log("Error al enviar correo a {$to}: {$mail->ErrorInfo}");
		return false;
	}
}

// ===========================================
// 1. Procesar los datos del formulario
// ===========================================
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// ⚠️ Validación básica contra bots (campo oculto)
	if (!empty($_POST['contact-botcheck'])) {
		echo json_encode(['status' => 'error', 'message' => '¡Error de seguridad!']);
		exit;
	}

	// Recoger y sanear los datos
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
	$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
	$message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

	// Si el email no es válido, detenemos el proceso
	if (!$email) {
		echo json_encode(['status' => 'error', 'message' => 'La dirección de correo electrónico es inválida.']);
		exit;
	}

	$all_sent = true;

	// ===========================================
	// 2. Correo de Notificación a la Empresa
	// ===========================================
	$company_subject = "Nuevo Contacto Web: " . ($subject ? $subject : 'Consulta sin asunto');
	$company_body = "
        <p><strong>De:</strong> {$name}</p>
        <p><strong>Email:</strong> {$email}</p>
        <p><strong>Teléfono:</strong> {$phone}</p>
        <p><strong>Asunto:</strong> " . ($subject ? $subject : 'N/A') . "</p>
        <hr>
        <p><strong>Mensaje:</strong></p>
        <p>" . nl2br($message) . "</p>
    ";

	$company_sent = sendEmail(DESTINATION_EMAIL, $company_subject, $company_body);
	if (!$company_sent) {
		$all_sent = false;
		// Opcionalmente, puedes enviar una notificación de fallo al administrador aquí.
	}

	// ===========================================
	// 3. Correo de Auto-Respuesta al Cliente
	// ===========================================
	$ar_subject = filter_input(INPUT_POST, 'ar_subject', FILTER_SANITIZE_STRING);
	$ar_message_base = filter_input(INPUT_POST, 'ar_message', FILTER_SANITIZE_STRING);
	$ar_title = filter_input(INPUT_POST, 'ar_title', FILTER_SANITIZE_STRING);
	$ar_footer = filter_input(INPUT_POST, 'ar_footer', FILTER_SANITIZE_STRING);

	// Personalizar el mensaje de auto-respuesta
	$ar_message_personalized = str_replace('{name}', $name, $ar_message_base);

	$autoresponder_body = "
        <div style='font-family: Arial, sans-serif; line-height: 1.6;'>
            <h2 style='color: #003b6f;'>{$ar_title}</h2>
            <p>{$ar_message_personalized}</p>
            <p><strong>Detalles de tu solicitud:</strong></p>
            <ul>
                <li><strong>Nombre:</strong> {$name}</li>
                <li><strong>Email:</strong> {$email}</li>
                <li><strong>Asunto:</strong> " . ($subject ? $subject : 'N/A') . "</li>
            </ul>
            <p>Nuestro equipo revisará tu mensaje y se pondrá en contacto contigo lo antes posible.</p>
            <hr>
            <p style='font-size: 0.9em; color: #666;'>{$ar_footer}</p>
        </div>
    ";

	$autoresponder_sent = sendEmail($email, $ar_subject, $autoresponder_body);
	if (!$autoresponder_sent) {
		$all_sent = false;
		error_log("Error al enviar auto-respuesta a {$email}");
	}


	// ===========================================
	// 4. Respuesta al Cliente (AJAX o Recarga)
	// ===========================================
	// Suponiendo que tu formulario utiliza AJAX (como sugiere la etiqueta <div id="form-result">)
	if ($all_sent) {
		echo json_encode(['status' => 'success', 'message' => '¡Mensaje enviado con éxito! Revisa tu bandeja de entrada para la confirmación.']);
	} else {
		// Mensaje de error más genérico para el usuario
		echo json_encode(['status' => 'error', 'message' => 'Hubo un problema al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.']);
	}

} else {
	// Acceso directo al script sin POST
	echo json_encode(['status' => 'error', 'message' => 'Acceso no permitido.']);
}

?>