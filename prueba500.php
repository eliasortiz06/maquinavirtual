<?php
// Activar la visualización de errores solo si no se ha manejado la redirección
ini_set('display_errors', 0); // Desactiva la visualización de errores
ini_set('log_errors', 1);       // Activa el registro de errores
error_reporting(E_ALL);          // Reportar todos los errores

// Forzar un error 500 (Internal Server Error)
http_response_code(500);

// Redirigir a la página de error personalizada
header('Location: /error500.html');
exit(); // Asegúrate de terminar el script aquí
?>

