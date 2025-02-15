<?php
session_start();

// Verificar si hay datos en la sesión
if (!isset($_SESSION['pelicula']) || !isset($_SESSION['sesion']) || !isset($_SESSION['asientos'])) {
    header("Location: index.php");
    exit;
}

// Incluir Dompdf
require_once 'vendor/autoload.php';

use Dompdf\Dompdf;

// Crear contenido del PDF
$contenido = "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Entradas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        .ticket {
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 5px;
        }
        .ticket p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <h1>Tus Entradas</h1>
    <div class='ticket'>
        <p><strong>Película:</strong> " . htmlspecialchars($_SESSION['pelicula']) . "</p>
        <p><strong>Sesión:</strong> " . htmlspecialchars($_SESSION['sesion']) . "</p>
        <p><strong>Asientos seleccionados:</strong> " . implode(", ", $_SESSION['asientos']) . "</p>
    </div>
</body>
</html>
";

// Instanciar Dompdf
$dompdf = new Dompdf();
$dompdf->loadHtml($contenido);

// Establecer el tamaño del papel y orientación
$dompdf->setPaper('A4', 'portrait');

// Renderizar el HTML como PDF
$dompdf->render();

// Salida del PDF (descarga forzada)
$dompdf->stream("entradas.pdf", ["Attachment" => true]);

// Limpiar sesión después de generar el PDF
session_destroy();
exit;
?>