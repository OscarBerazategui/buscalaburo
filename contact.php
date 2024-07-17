<?php
// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Dirección de correo electrónico a la que se enviará el mensaje
    $to = "oberazategui@hotmail.com";

    // Asunto del mensaje
    $subject = "Mensaje de contacto desde Busca Laburo";

    // Construye el cuerpo del mensaje
    $body = "Nombre: $name\n";
    $body .= "Email: $email\n";
    $body .= "Mensaje:\n$message";

    // Encabezados adicionales
    $headers = "From: $email";

    // Intenta enviar el correo electrónico
    if (mail($to, $subject, $body, $headers)) {
        // Si el correo se envió correctamente, redirige a una página de confirmación
        header("Location: confirmation.html");
    } else {
        // Si hubo un error al enviar el correo, muestra un mensaje de error
        echo "Hubo un error al enviar el mensaje. Por favor, intenta de nuevo más tarde.";
    }
}
?>