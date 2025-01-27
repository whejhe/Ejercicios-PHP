<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    if (empty($nombre) || empty($email)) {
        echo "<p>Por favor, complete todos los campos.</p>";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p>El email no tiene un formato válido.</p>";
    } else {
        echo "<h1>Datos recibidos:</h1>";
        echo "<p>Nombre: $nombre</p>";
        echo "<p>Email: $email</p>";
    }
    ?>
</body>

</html>