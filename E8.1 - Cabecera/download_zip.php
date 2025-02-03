<?php
// download_zip.php

// Crear un archivo ZIP temporal
$zipPath = tempnam(sys_get_temp_dir(), 'zip') . '.zip';

try {
    // Crear un nuevo archivo ZIP
    $zip = new \ZipArchive();
    if ($zip->open($zipPath, \ZipArchive::CREATE) !== true) {
        throw new Exception('No se pudo crear el archivo ZIP.');
    }

    // Agregar archivos al ZIP
    $files = [
        'archivo1.txt' => 'Contenido del archivo 1',
        'archivo2.txt' => 'Contenido del archivo 2',
    ];

    foreach ($files as $filename => $content) {
        $zip->addFromString($filename, $content); // Agregar contenido como cadena
    }

    // Cerrar el archivo ZIP
    $zip->close();

    // Configurar las cabeceras HTTP para forzar la descarga del archivo ZIP
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="archivos.zip"');
    header('Content-Length: ' . filesize($zipPath));

    // Enviar el archivo ZIP al navegador
    readfile($zipPath);

    // Eliminar el archivo ZIP temporal después de enviarlo
    unlink($zipPath);
} catch (Exception $e) {
    // Capturar errores y mostrar un mensaje
    echo "Error al crear el archivo ZIP: " . $e->getMessage();
}

exit();