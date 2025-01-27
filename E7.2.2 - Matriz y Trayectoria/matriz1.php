<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Inicial</title>
</head>
<body>
    <h1>Introduzca el tamaño de la matriz cuadrada con la que desee trabajar:</h1>
    <form action="matriz2.php" method="post">
        <label for="tamano_matriz">Tamaño de la matriz (1-10):</label>
        <input type="text" id="tamano_matriz" name="tamano_matriz" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>