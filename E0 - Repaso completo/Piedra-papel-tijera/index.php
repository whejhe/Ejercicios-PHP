<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Simula un juego de "piedra, papel o tijera" entre un jugador y la 
     computadora.

    Elige un número aleatorio para la computadora.
    Pide la elección del jugador mediante un formulario.
    Decide el ganador según las reglas del juego. -->
    <h1>Juego: Piedra, Papel o Tijera</h1>

    <!-- Formulario para que el jugador elija -->
    <form method="POST">
        <label for="eleccion">Elige tu jugada:</label>
        <select name="eleccion" id="eleccion" required>
            <option value="piedra">Piedra</option>
            <option value="papel">Papel</option>
            <option value="tijera">Tijera</option>
        </select>
        <button type="submit">Jugar</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Opciones del juego
        $opciones = ['piedra', 'papel', 'tijera'];

        // Elección de la computadora
        $computadora = $opciones[rand(0, 2)];

        // Elección del jugador
        $jugador = $_POST['eleccion'];

        // Determinar el ganador
        $resultado = '';
        if ($jugador === $computadora) {
            $resultado = 'Es un empate.';
        } elseif (
            ($jugador === 'piedra' && $computadora === 'tijera') ||
            ($jugador === 'papel' && $computadora === 'piedra') ||
            ($jugador === 'tijera' && $computadora === 'papel')
        ) {
            $resultado = '¡Ganaste!';
        } else {
            $resultado = 'Perdiste. La computadora ganó.';
        }

        // Mostrar resultados
        echo "<h2>Resultados:</h2>";
        echo "<p><strong>Tu elección:</strong> $jugador</p>";
        echo "<p><strong>Elección de la computadora:</strong> $computadora</p>";
        echo "<p><strong>Resultado:</strong> $resultado</p>";
    }
    ?>
</body>

</html>