<!-- formulario.php -->
<!-- formulario.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado del Formulario</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Si tienes una hoja de estilos -->
</head>
<body>
    <h1>Resultado del Formulario</h1>

    <?php
        // Obtén los datos del formulario usando $_POST
        $nombre = $_POST['nombre'] ?? '';
        $apellido = $_POST['apellidos'] ?? '';
        $clave = $_POST['clave'] ?? '';
        $estacion = $_POST['estacion'] ?? 'No especificada';
        $transporte = $_POST['transporte'] ?? 'No especificado';
        $aficiones = $_POST['aficiones'] ?? [];
        $observaciones = $_POST['observaciones'] ?? 'Sin observaciones';

        // Formato de salida con HTML
        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Apellidos:</strong> $apellido</p>";
        echo "<p><strong>Clave:</strong> " . str_repeat('*', strlen($clave)) . "</p>";
        echo "<p><strong>Estación favorita del año:</strong> $estacion</p>";
        echo "<p><strong>Medio de transporte que más utilizas:</strong> $transporte</p>";

        // Para las aficiones, verificamos si hay alguna seleccionada y las mostramos como una lista
        echo "<p><strong>Aficiones:</strong></p>";
        if (!empty($aficiones)) {
            echo "<ul>";
            foreach ($aficiones as $aficion) {
                echo "<li>$aficion</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se seleccionaron aficiones</p>";
        }

        echo "<p><strong>Observaciones:</strong> $observaciones</p>";
    ?>

    <a href="index.html">Volver al formulario</a> <!-- Enlace para regresar al formulario -->
</body>
</html>
