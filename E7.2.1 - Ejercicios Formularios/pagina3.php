<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['elementos'])) {
        $elementos = $_POST['elementos'];
        echo "<h1>Tus datos originales son:</h1>";
        echo implode(" ", $elementos) . "<br>";

        echo "<h1>Tus datos invertidos son:</h1>";
        echo implode(" ", array_reverse($elementos)) . "<br>";
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    echo "<a href='pagina1.php'>Volver al inicio</a>";
    ?>
</body>

</html>