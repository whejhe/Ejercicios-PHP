<?php

// Verificar si se ha especificado el formato de la imagen
if (isset($_GET['format']) && in_array($_GET['format'], ['jpeg', 'png', 'gif'])) {
    $format = $_GET['format'];

    // Crear una imagen en blanco de 400x200 píxeles
    $image = imagecreatetruecolor(500, 200);

    // Definir colores
    $backgroundColor = imagecolorallocate($image, 255, 255, 255); // Fondo blanco
    $textColor = imagecolorallocate($image, 0, 0, 0); // Texto negro

    // Rellenar el fondo de la imagen con el color blanco
    imagefill($image, 0, 0, $backgroundColor);

    // Escribir texto en la imagen
    $text = "Esta es una Imagen generada en formato $format";
    imagestring($image, 5, 50, 80, $text, $textColor);

    // Configurar las cabeceras HTTP según el formato seleccionado
    switch ($format) {
        case 'jpeg':
            header('Content-Type: image/jpeg');
            imagejpeg($image);
            break;
        case 'png':
            header('Content-Type: image/png');
            imagepng($image);
            break;
        case 'gif':
            header('Content-Type: image/gif');
            imagegif($image);
            break;
    }

    // Liberar memoria
    imagedestroy($image);
    exit();
} else {
    echo "Formato de imagen no válido. Por favor, elige 'jpeg', 'png' o 'gif'.";
}