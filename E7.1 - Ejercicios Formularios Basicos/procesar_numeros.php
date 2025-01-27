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

    if (is_numeric($valor)) {
        echo "<p>El valor es numérico.</p>";
    } else {
        echo "<p>El valor no es numérico.</p>";
    }

    if (ctype_digit($valor)) {
        echo "<p>El valor contiene solo dígitos.</p>";
    } else {
        echo "<p>El valor no contiene solo dígitos.</p>";
    }
    ?>
</body>

</html>