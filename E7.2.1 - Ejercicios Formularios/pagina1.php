<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Inicial</title>
</head>
<body>
    <h1>Introduzca el número de elementos:</h1>
    <form action="pagina2.php" method="post">
        <label for="num_elementos">Número de elementos (1-10):</label>
        <input type="text" id="num_elementos" name="num_elementos" required>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>