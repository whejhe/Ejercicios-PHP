<?php
// Iniciar una sesión
session_start();
// Cerrar la sesión
session_destroy();
// Redireccionar a la página de login
header('Location: login.html');
exit;
?>