<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if ($_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
        $nombre_archivo = $_FILES['archivo']['name'];
        $ruta_temporal = $_FILES['archivo']['tmp_name'];
        $ruta_destino = "uploads/" . $nombre_archivo;

        if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
            echo "<p>El archivo se subió correctamente.</p>";
        } else {
            echo "<p>Hubo un error al subir el archivo.</p>";
        }
    } else {
        echo "<p>Hubo un error en la subida del archivo.</p>";
    }
    ?>
</body>

</html>