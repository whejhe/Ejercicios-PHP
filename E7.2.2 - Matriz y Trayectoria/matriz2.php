<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // Validar que el tamaño esté entre 1 y 10
    $tamano_matriz = isset($_POST['tamano_matriz']) ? (int)$_POST['tamano_matriz'] : 0;

    if ($tamano_matriz < 1 || $tamano_matriz > 10) {
        echo "<p>El valor es incorrecto. Debe ser un número entero entre 1 y 10.</p>";
        echo "<a href='matriz1.php'>Volver al inicio</a>";
    } else {
        echo "<h1>Introduzca los valores de la matriz:</h1>";
        echo "<form action='matriz3.php' method='post'>";
        for ($i = 0; $i < $tamano_matriz; $i++) {
            for ($j = 0; $j < $tamano_matriz; $j++) {
                echo "<label for='matriz$i$j'>Fila " . ($i + 1) . ", Columna " . ($j + 1) . ":</label>";
                echo "<input type='text' id='matriz$i$j' name='matriz[$i][$j]' required><br>";
            }
        }
        echo "<label for='fila'>Fila:</label>";
        echo "<select id='fila' name='fila'>";
        for ($i = 1; $i <= $tamano_matriz; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        echo "</select><br>";

        echo "<label for='columna'>Columna:</label>";
        echo "<select id='columna' name='columna'>";
        for ($i = 1; $i <= $tamano_matriz; $i++) {
            echo "<option value='$i'>$i</option>";
        }
        echo "</select><br>";

        echo "<label for='direccion'>Dirección:</label>";
        echo "<select id='direccion' name='direccion'>";
        echo "<option value='arriba'>Arriba</option>";
        echo "<option value='abajo'>Abajo</option>";
        echo "<option value='izquierda'>Izquierda</option>";
        echo "<option value='derecha'>Derecha</option>";
        echo "<option value='arriba_izquierda'>Arriba-Izquierda</option>";
        echo "<option value='arriba_derecha'>Arriba-Derecha</option>";
        echo "<option value='abajo_izquierda'>Abajo-Izquierda</option>";
        echo "<option value='abajo_derecha'>Abajo-Derecha</option>";
        echo "</select><br>";

        echo "<input type='submit' value='Enviar'>";
        echo "<input type='reset' value='Borrar'>";
        echo "</form>";
        echo "<a href='matriz1.php'>Volver al inicio</a>";
    }
    ?>
</body>

</html>