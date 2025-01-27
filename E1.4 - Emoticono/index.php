<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Emoticono Aleatorio</title>
</head>
<body>
    <h1>Emoticono Aleatorio</h1>
    <div class="container">
        <p>
            <?php
            $emoticono = rand(128512, 128586);

            echo "&#" . $emoticono . ";<br>";
            ?>
        </p>
        <button onclick="location.reload()">Refrescar</button>
    </div>
</body>
</html>
