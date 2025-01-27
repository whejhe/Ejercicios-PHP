<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crea un programa que permita al usuario introducir el rango de valores 
     del dado (mínimo y máximo) mediante un formulario. 
     Luego, muestra un número aleatorio dentro de ese rango utilizando rand().

        Requerimientos:
            Usa un formulario HTML para capturar el rango.
            Asegúrate de validar que el mínimo sea menor que el máximo. -->
            <h1>Generador de Número Aleatorio</h1>
    <!-- Formulario para capturar el rango de valores -->
    <form method="post">
        <label for="min">Valor mínimo:</label>
        <input type="number" name="min" id="min" required>
        <br>
        <label for="max">Valor máximo:</label>
        <input type="number" name="max" id="max" required>
        <br><br>
        <button type="submit">Generar número</button>
    </form>

    <?php
    // Verificar si se enviaron los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener los valores enviados por el formulario
        $min = $_POST["min"];
        $max = $_POST["max"];

        // Validar que el mínimo sea menor que el máximo
        if ($min < $max) {
            // Generar un número aleatorio dentro del rango
            $numeroAleatorio = random_int($min, $max);
            echo "<p>Número generado entre $min y $max: <strong>$numeroAleatorio</strong></p>";
        } else {
            // Mostrar mensaje de error si la validación falla
            echo "<p style='color: red;'>El valor mínimo debe ser menor que el valor máximo. Inténtalo de nuevo.</p>";
        }
    }
    ?>
</body>
</html>