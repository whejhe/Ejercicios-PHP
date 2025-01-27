<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <?php
    // Generar un número aleatorio de dados entre 1 y 10
    $num_dados = rand(1, 10);

    // Inicializar contadores
    $pares = 0;
    $impares = 0;

    // Array para almacenar los valores de los dados
    $dados = [];

    // Simular la tirada de los dados
    for ($i = 0; $i < $num_dados; $i++) {
        $valor = rand(1, 6);
        $dados[] = $valor;
        if ($valor % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    // Mostrar los resultados
    echo "<h1>$num_dados dados</h1>";
    echo "<div>";
    foreach ($dados as $dado) {
        echo "<img src='img/$dado.svg' alt='Dado $dado' width='50'>";
    }
    echo "</div>";
    echo "<p>Han salido $pares números pares y $impares números impares.</p>";
    ?>

    <h2>Ejercicio 2</h2>
    <?php
    // Simular la tirada de los dados para ambos jugadores
    $jugador1 = rand(1, 6);
    $jugador2 = rand(1, 6);

    // Mostrar los resultados
    echo "<h1>Jugador 1:</h1>";
    echo "<img src='img/$jugador1.svg' alt='Dado $jugador1' width='50'>";

    echo "<h1>Jugador 2:</h1>";
    echo "<img src='img/$jugador2.svg' alt='Dado $jugador2' width='50'>";

    // Determinar el ganador
    if ($jugador1 > $jugador2) {
        echo "<p>Ha ganado el jugador 1.</p>";
    } elseif ($jugador2 > $jugador1) {
        echo "<p>Ha ganado el jugador 2.</p>";
    } else {
        echo "<p>Han quedado empate.</p>";
    }
    ?>
    <h2>Ejercicio 3</h2>
    <?php
    // Inicializar contadores
    $ganados_jugador1 = 0;
    $ganados_jugador2 = 0;
    $empatados = 0;

    // Simular la tirada de 4 dados para ambos jugadores
    $jugador1 = [];
    $jugador2 = [];

    for ($i = 0; $i < 4; $i++) {
        $jugador1[] = rand(1, 6);
        $jugador2[] = rand(1, 6);
    }

    // Mostrar los resultados
    echo "<h1>Jugador 1</h1>";
    echo "<div>";
    foreach ($jugador1 as $dado) {
        echo "<img src='img/$dado.svg' alt='Dado $dado' width='50'>";
    }
    echo "</div>";

    echo "<h1>Jugador 2</h1>";
    echo "<div>";
    foreach ($jugador2 as $dado) {
        echo "<img src='img/$dado.svg' alt='Dado $dado' width='50'>";
    }
    echo "</div>";

    // Comparar los resultados
    for ($i = 0; $i < 4; $i++) {
        if ($jugador1[$i] > $jugador2[$i]) {
            $ganados_jugador1++;
        } elseif ($jugador2[$i] > $jugador1[$i]) {
            $ganados_jugador2++;
        } else {
            $empatados++;
        }
    }

    // Mostrar el resultado final
    echo "<h1>Resultado</h1>";
    echo "<p>El jugador 1 ha ganado $ganados_jugador1 veces, el jugador 2 ha ganado $ganados_jugador2 veces y los jugadores han empatado $empatados veces.</p>";
    ?>
    <h2>Ejercicio 4</h2>
    <?php
    // Simular la tirada de 6 dados
    $tirada = [];
    for ($i = 0; $i < 6; $i++) {
        $tirada[] = rand(1, 6);
    }

    // Mostrar la tirada inicial
    echo "<h1>Tirada de 6 dados</h1>";
    echo "<div>";
    foreach ($tirada as $dado) {
        echo "<img src='img/$dado.svg' alt='Dado $dado' width='50'>";
    }
    echo "</div>";

    // Mostrar un dado al azar
    $dado_a_eliminar = rand(1, 6);
    echo "<h1>Dado a eliminar</h1>";
    echo "<img src='img/$dado_a_eliminar.svg' alt='Dado $dado_a_eliminar' width='50'>";

    // Eliminar los dados que coincidan con el dado a eliminar
    $dados_restantes = array_filter($tirada, function ($dado) use ($dado_a_eliminar) {
        return $dado != $dado_a_eliminar;
    });

    // Mostrar los dados restantes
    echo "<h1>Dados restantes</h1>";
    echo "<div>";
    foreach ($dados_restantes as $dado) {
        echo "<img src='img/$dado.svg' alt='Dado $dado' width='50'>";
    }
    echo "</div>";
    ?>
</body>

</html>