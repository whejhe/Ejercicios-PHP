<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Dado Numerico</title>
</head>

<body>
    <div class="container">
        <h1>Número Aleatorio</h1>
        <p><?php echo rand(1, 6); ?></p>
        <button onclick="generarNumero()">Tirar</button>
    </div>

    <script>
        function generarNumero() {
            let numero = Math.floor(Math.random() * 6) + 1;
            document.querySelector('p').innerHTML = numero;
        }
    </script>
</body>

</html>