<?php

// Verificar si se ha enviado el nombre del archivo y su contenido
if (isset($_POST['filename']) && isset($_POST['contenido'])) {
    $filename = $_POST['filename']; // Nombre del archivo proporcionado por el usuario
    $content = $_POST['contenido']; // Contenido del archivo

    // Asegurarse de que el nombre del archivo no esté vacío
    if (!empty($filename)) {
        // Agregar la extensión .txt al nombre del archivo si no está presente
        if (pathinfo($filename, PATHINFO_EXTENSION) !== 'txt') {
            $filename .= '.txt';
        }

        // Configurar las cabeceras HTTP para forzar la descarga del archivo
        header('Content-Type: text/plain'); // Tipo MIME para texto plano
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        header('Content-Length: ' . strlen($content)); // Tamaño del archivo

        // Enviar el contenido al navegador
        echo $content;
        exit(); // Terminar el script después de enviar el archivo
    } else {
        echo "Por favor, proporcione un nombre válido para el archivo.";
    }
} else {
    echo "Faltan datos necesarios para generar el archivo.";
}