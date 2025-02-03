<?php
require __DIR__ . '/vendor/autoload.php';

use Nelexa\Zip\ZipFile;

// Crear un archivo ZIP temporal
$zipPath = tempnam(sys_get_temp_dir(), 'zip') . '.zip';

try {
    // Crear un objeto ZipFile
    $zip = new ZipFile($zipPath);

    // Agregar archivos al ZIP
    $files = [
        'archivo1.txt' => 'Contenido del archivo 1',
        'archivo2.txt' => 'Contenido del archivo 2',
    ];

    foreach ($files as $filename => $content) {
        $zip->addFromString($filename, $content);
    }

    // Cerrar el archivo ZIP
    $zip->close();

    // Configurar las cabeceras HTTP para forzar la descarga del archivo ZIP
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="archivos.zip"');
    header('Content-Length: ' . filesize($zipPath));

    // Enviar el archivo ZIP al navegador
    readfile($zipPath);
} catch (Exception $e) {
    // Capturar errores y mostrar un mensaje
    echo "Error al crear el archivo ZIP: " . $e->getMessage();
}

// Eliminar el archivo ZIP temporal después de enviarlo
unlink($zipPath);

exit();