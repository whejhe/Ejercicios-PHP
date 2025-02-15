<?php
session_start();

if (!isset($_SESSION['pelicula']) || !isset($_SESSION['sesion']) || !isset($_SESSION['asientos'])) {
    header("Location: index.php");
    exit;
}

// Crear contenido del archivo
$contenido = "Película: " . $_SESSION['pelicula'] . "\n";
$contenido .= "Sesión: " . $_SESSION['sesion'] . "\n";
$contenido .= "Asientos: " . implode(", ", $_SESSION['asientos']) . "\n";

// Generar archivo
header('Content-Type: application/octet-stream');
header('Content-Disposition: attachment; filename="entradas.txt"');
echo $contenido;

// Limpiar sesión
session_destroy();
exit;
?>