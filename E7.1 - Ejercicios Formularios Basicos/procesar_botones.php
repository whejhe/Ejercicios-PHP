<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['accion'])) {
        $accion = $_POST['accion'];
        if ($accion == "Guardar") {
            echo "<p>Se ha presionado el botón Guardar.</p>";
        } elseif ($accion == "Eliminar") {
            echo "<p>Se ha presionado el botón Eliminar.</p>";
        }
    } else {
        echo "<p>No se ha presionado ningún botón.</p>";
    }
    ?>
</body>

</html>