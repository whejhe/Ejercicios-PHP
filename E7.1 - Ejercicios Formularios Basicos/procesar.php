<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    echo "<h1>Datos recibidos con GET:</h1>";
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    echo "<h1>Datos recibidos con \$_GET:</h1>";
    echo "<pre>";
    print_r($_GET);
    echo "</pre>";
    ?>
</body>

</html>