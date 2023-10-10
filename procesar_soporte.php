<?php //ARCHIVO PARA PROCESAR Y ENVIAR MENSAJE AL CORREO ELECTRONICO DE SOPORTE - No funciona debido a que se debe configurar el SMTP
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Verificar si el mensaje no excede los 250 caracteres
    if (strlen($message) <= 250) {
        // Destinatario del correo electrónico
        $to = "inu_soporte@hotmail.com";

        // Asunto del correo electrónico
        $subject = "Solicitud de Soporte Técnico - Inu-Nihong";

        // Contenido del correo electrónico
        $message = "Nombre de Usuario: $username\n";
        $message .= "Correo Electrónico: $email\n";
        $message .= "Mensaje de Soporte:\n$message";

        // Cabeceras del correo
        $headers = "From: $email\r\n";

        // Enviar el correo electrónico
        mail($to, $subject, $message, $headers);

        echo "Mensaje enviado con éxito. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "El mensaje supera el límite de 250 caracteres.";
    }
} else {
    echo "Acceso no autorizado.";
}
?>