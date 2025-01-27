<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $valor = $_POST['valor'];

    if (ctype_alpha($valor)) {
        echo "<p>El valor contiene solo letras.</p>";
    } else {
        echo "<p>El valor no contiene solo letras.</p>";
    }

    if (ctype_alnum($valor)) {
        echo "<p>El valor es alfanumérico.</p>";
    } else {
        echo "<p>El valor no es alfanumérico.</p>";
    }

    if (ctype_digit($valor)) {
        echo "<p>El valor contiene solo dígitos.</p>";
    } else {
        echo "<p>El valor no contiene solo dígitos.</p>";
    }
    ?>
</body>

</html>