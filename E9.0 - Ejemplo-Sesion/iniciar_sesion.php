<?php
// Iniciar una sesión
session_start();

// Comprobar si el usuario y la contraseña son correctos
if ($_POST['usuario'] == 'Carlos' && $_POST['contraseña'] == '1234') {
    // Establecer la variable de sesión 'usuario' con el valor del usuario
    $_SESSION['usuario'] = $_POST['usuario'];
    // Establecer la variable de sesión 'ultimo_acceso' con la fecha y hora actual
    $_SESSION['ultimo_acceso'] = time();
    // Redireccionar a la página principal
    header('Location: principal.php');
    exit;
} else {
    // Mostrar un mensaje de error si el usuario o la contraseña son incorrectos
    echo 'Error: usuario o contraseña incorrectos';
}
?>