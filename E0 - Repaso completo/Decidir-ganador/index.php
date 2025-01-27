<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que compare dos números aleatorios generados 
     (entre 1 y 100) para decidir quién gana:

        Si el primero es mayor, gana el jugador 1.
        Si el segundo es mayor, gana el jugador 2.
        Si son iguales, es un empate.
Requerimientos:
    Genera ambos números en una función separada.
    Muestra el resultado indicando el ganador. -->
    <h1>Juego: ¿Quién gana?</h1>
    <?php
        // Función para generar un número aleatorio entre 1 y 100
        function generarNumero() {
            return rand(1, 100);
        }

        // Generar números para los dos jugadores
        $jugador1 = generarNumero();
        $jugador2 = generarNumero();

        // Mostrar los números generados
        echo "<p>Número del Jugador 1: <strong>$jugador1</strong></p>";
        echo "<p>Número del Jugador 2: <strong>$jugador2</strong></p>";

        // Comparar los números y determinar el resultado
        if ($jugador1 > $jugador2) {
            echo "<p>Resultado: ¡Gana el Jugador 1!</p>";
        } elseif ($jugador2 > $jugador1) {
            echo "<p>Resultado: ¡Gana el Jugador 2!</p>";
        } else {
            echo "<p>Resultado: ¡Es un empate!</p>";
        }
    ?>
    
    <!-- Botón para recargar la página -->
    <button onclick="window.location.reload();">Volver a tirar</button>
</body>
</html>