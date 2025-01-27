<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>Datos recibidos:</h1>";
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";

    // Verificar si se seleccionaron casillas de verificación
    if (isset($_POST['check'])) {
        echo "<h2>Casillas de verificación seleccionadas:</h2>";
        foreach ($_POST['check'] as $opcion) {
            echo $opcion . "<br>";
        }
    } else {
        echo "<p>No se seleccionaron casillas de verificación.</p>";
    }

    // Verificar si se seleccionó un botón radio
    if (isset($_POST['radio'])) {
        echo "<h2>Botón radio seleccionado:</h2>";
        echo $_POST['radio'];
    } else {
        echo "<p>No se seleccionó un botón radio.</p>";
    }
    ?>
</body>

</html>