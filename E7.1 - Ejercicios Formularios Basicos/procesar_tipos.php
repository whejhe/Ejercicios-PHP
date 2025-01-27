<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $entero = $_POST['entero'];
    $flotante = $_POST['flotante'];
    $cadena = $_POST['cadena'];

    if (is_int($entero)) {
        echo "<p>El valor es un entero.</p>";
    } else {
        echo "<p>El valor no es un entero.</p>";
    }

    if (is_float($flotante)) {
        echo "<p>El valor es un flotante.</p>";
    } else {
        echo "<p>El valor no es un flotante.</p>";
    }

    if (is_string($cadena)) {
        echo "<p>El valor es una cadena.</p>";
    } else {
        echo "<p>El valor no es una cadena.</p>";
    }
    ?>
</body>

</html>