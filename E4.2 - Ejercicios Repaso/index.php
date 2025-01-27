<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bucles Anidados en PHP</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="containerTitle">
        <?php
        echo "<h1>Ejercicios Repaso en PHP</h1>";
        ?>
    </div>
    <div class="container">
        <!-- Ejercicio 1 -->
        <?php
        echo "<h2>Ejercicio 1</h2>";
        for ($i = 1; $i <= 3; $i++) {
            echo "<p>Sentencia de la variable \$i incluyendo el valor: $i</p>";
            for ($j = 'a'; $j <= 'd'; $j++) {
                echo "<p>Sentencia de la variable \$j incluyendo el valor: $j</p>";
            }
        }
        ?>

        <!-- Ejercicio 2 -->
        <?php
        echo "<h2>Ejercicio 2</h2>";
        // Bucle para simular las 3 tiradas del primer dado
        for ($tirada1 = 1; $tirada1 <= 3; $tirada1++) {
            $dado1 = rand(1, 6);
            echo "<p>Sentencia del primer dado incluyendo el valor en la tirada $tirada1: $dado1</p>";
            for ($tirada2 = 1; $tirada2 <= $dado1; $tirada2++) {
                $dado2 = rand(1, 6);
                echo "<p>Sentencia del segundo dado incluyendo el valor: $dado2</p>";
            }
        }
        ?>

        <!-- Ejercicio 3 -->
        <?php
        echo "<h2>Ejercicio 3</h2>";
        $numero = 5;
        $factorial = 1;

        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i;
        }
        echo "<p>El factorial de $numero es: $factorial</p>";
        ?>

        <!-- Ejercicio 4 -->
        <?php
        echo "<h2>Ejercicio 4</h2>";
        $numero = rand(1, 10);
        echo "<p>El número aleatorio generado es: $numero</p>";
        $rango = range(1, 10);

        $tabla = [];
        foreach ($rango as $multiplicador) {
            $tabla[] = $numero * $multiplicador;
        }

        echo "<p>Tabla de multiplicar del $numero:</p>";
        echo "<ul>";
        foreach ($tabla as $indice => $valor) {
            echo "<li>$numero x " . ($indice + 1) . " = $valor</li>";
        }
        echo "</ul>";

        $minimo = min($tabla);
        $maximo = max($tabla);

        echo "<p>El valor mínimo de la tabla es: $minimo</p>";
        echo "<p>El valor máximo de la tabla es: $maximo</p>";

        ?>

        <!-- Ejercicio 5 -->
        <?php
        echo "<h2>Ejercicio 5</h2>";
        $claseA = [
            ["Nombre" => "Juan", "Edad" => 21],
            ["Nombre" => "María", "Edad" => 19],
            ["Nombre" => "Pedro", "Edad" => 24],
            ["Nombre" => "Antonio", "Edad" => 30],
            ["Nombre" => "Carmen", "Edad" => 24],
            ["Nombre" => "Carlos", "Edad" => 26],
            ["Nombre" => "Lucía", "Edad" => 22],
        ];

        $claseB = [
            ["Nombre" => "Jaime", "Edad" => 27],
            ["Nombre" => "Luisa", "Edad" => 21],
            ["Nombre" => "Aitor", "Edad" => 33],
            ["Nombre" => "Macarena", "Edad" => 22],
            ["Nombre" => "María", "Edad" => 27],
            ["Nombre" => "Pedro", "Edad" => 28],
            ["Nombre" => "Juan", "Edad" => 24],
        ];

        echo "<h2>Clase A</h2>";
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Edad</th></tr>";
        foreach ($claseA as $alumno) {
            echo "<tr><td>{$alumno['Nombre']}</td><td>{$alumno['Edad']}</td></tr>";
        }
        echo "</table>";

        echo "<h2>Clase B</h2>";
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Edad</th></tr>";
        foreach ($claseB as $alumno) {
            echo "<tr><td>{$alumno['Nombre']}</td><td>{$alumno['Edad']}</td></tr>";
        }
        echo "</table>";

        $claseUnida = array_merge($claseA, $claseB);

        echo "<h2>Clase Unificada</h2>";
        echo "<table>";
        echo "<tr><th>Nombre</th><th>Edad</th></tr>";
        foreach ($claseUnida as $alumno) {
            echo "<tr><td>{$alumno['Nombre']}</td><td>{$alumno['Edad']}</td></tr>";
        }
        echo "</table>";

        ?>

        <!-- Ejercicio 6 -->
        <?php
        echo "<h2>Ejercicio 6</h2>";
        function esPrimo($numero)
        {
            if ($numero <= 1)
                return false;
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0)
                    return false;
            }
            return true;
        }

        $inicio = 10;
        $fin = 50;

        $primos = [];
        for ($i = $inicio; $i <= $fin; $i++) {
            if (esPrimo($i)) {
                $primos[] = $i;
            }
        }

        echo "<p>Rango de números: $inicio a $fin</p>";

        if (!empty($primos)) {
            echo "<p>Números primos encontrados:</p>";
            echo "<ul>";
            foreach ($primos as $primo) {
                echo "<li>$primo</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>No se encontraron números primos en el rango especificado.</p>";
        }

        ?>

        <!-- Ejercicio 7 -->
        <?php
        echo "<h2>Ejercicio 7</h2>";

        $n = 8;
        
        $secuencia = "";
        for ($i = 0; $i < $n; $i++) {
            $secuencia .= rand(0, 1);
        }

        $complemento = "";
        for ($i = 0; $i < $n; $i++) {
            $complemento .= $secuencia[$i] == "0" ? "1" : "0";
        }

        echo "<p>Secuencia aleatoria de $n bits: $secuencia</p>";
        echo "<p>Secuencia complementaria: $complemento</p>";

        ?>
    </div>
</body>

</html>