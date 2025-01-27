<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num_elementos = isset($_POST['num_elementos']) ? (int)$_POST['num_elementos'] : 0;

    if ($num_elementos < 1 || $num_elementos > 10) {
        echo "<p>El valor es incorrecto. Debe ser un número entero entre 1 y 10.</p>";
        echo "<a href='pagina1.php'>Volver al inicio</a>";
    } else {
        echo "<h1>Introduzca los elementos a tratar:</h1>";
        echo "<form action='pagina3.php' method='post'>";
        for ($i = 0; $i < $num_elementos; $i++) {
            echo "<label for='elemento$i'>Elemento " . ($i + 1) . ":</label>";
            echo "<input type='text' id='elemento$i' name='elementos[]' required><br>";
        }
        echo "<input type='submit' value='Enviar'>";
        echo "<input type='reset' value='Borrar'>";
        echo "</form>";
        echo "<a href='pagina1.php'>Volver al inicio</a>";
    }
    ?>
</body>

</html>