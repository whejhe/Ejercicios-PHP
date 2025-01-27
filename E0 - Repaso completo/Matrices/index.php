<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Ejercicios con Matrices</title>
</head>

<body>
    <div class="containerTitle">
        <?php
        echo "<h1>Ejercicios con Matrices en PHP</h1>";
        ?>
    </div>

    <div class="container">
        <!-- Ejercicio 1 -->
        <?php
        echo "<h2>Ejercicio 1</h2>";
        echo "<h3>Crea una matriz 3x3 con números del 1 al 9 y muestra el valor de la celda en la posición [1][2].</h3>";

        $matriz = [
            [1, 2, 3],
            [4, 5, 6],
            [7, 8, 9]
        ];
        echo "<h3>El valor en la posición [1][2] es: " . $matriz[1][2] . "</h3>";
        ?>

        <!-- Ejercicio 2 -->
        <?php
        echo "<h2>Ejercicio 2</h2>";
        echo "<h3>Crea una matriz bidimensional que almacene nombres de estudiantes y sus notas. Muestra las notas del segundo estudiante.</h3>";

        $estudiantes = [
            ["nombre" => "Juan", "nota" => 8.5],
            ["nombre" => "María", "nota" => 9.0],
            ["nombre" => "Pedro", "nota" => 7.8]
        ];
        echo "<h3>Las notas de " . $estudiantes[1]["nombre"] . " son: " . $estudiantes[1]["nota"] . "</h3>";
        ?>

        <!-- Ejercicio 3 -->
        <?php
        echo "<h2>Ejercicio 3</h2>";
        echo "<h3>Crea una matriz 2x3 de números y calcula la suma de todos sus elementos.</h3>";

        $matriz = [
            [1, 2, 3],
            [4, 5, 6]
        ];
        $suma = 0;
        foreach ($matriz as $fila) {
            foreach ($fila as $numero) {
                $suma += $numero;
            }
        }
        echo "<h3>La suma de todos los elementos es: $suma</h3>";
        ?>

        <!-- Ejercicio 4 -->
        <?php
        echo "<h2>Ejercicio 4</h2>";
        echo "<h3>Crea una matriz tridimensional que contenga datos sobre categorías, productos y precios. Muestra el precio del segundo producto de la primera categoría.</h3>";

        $productos = [
            "Electrónica" => [
                ["nombre" => "Teléfono", "precio" => 300],
                ["nombre" => "Tablet", "precio" => 200]
            ],
            "Hogar" => [
                ["nombre" => "Lámpara", "precio" => 50],
                ["nombre" => "Silla", "precio" => 75]
            ]
        ];
        echo "<h3>El precio del segundo producto de la categoría Electrónica es: " . $productos["Electrónica"][1]["precio"] . "</h3>";
        ?>

        <!-- Ejercicio 5 -->
        <?php
        echo "<h2>Ejercicio 5</h2>";
        echo "<h3>Crea una matriz 4x4 de números aleatorios entre 1 y 100. Imprime toda la matriz en formato de tabla HTML.</h3>";

        $matriz = [];
        for ($i = 0; $i < 4; $i++) {
            for ($j = 0; $j < 4; $j++) {
                $matriz[$i][$j] = rand(1, 100);
            }
        }

        echo "<table border='1'>";
        foreach ($matriz as $fila) {
            echo "<tr>";
            foreach ($fila as $celda) {
                echo "<td>$celda</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        ?>

        <!-- Ejercicio 6 -->
        <?php
        echo "<h2>Ejercicio 6</h2>";
        echo "<h3>Utiliza una matriz multidimensional para almacenar los horarios de una semana (días y horas). Muestra las horas del miércoles.</h3>";

        $horarios = [
            "Lunes" => ["08:00", "10:00", "14:00"],
            "Martes" => ["09:00", "11:00", "15:00"],
            "Miércoles" => ["08:30", "10:30", "16:00"],
            "Jueves" => ["09:30", "11:30", "14:30"],
            "Viernes" => ["08:00", "12:00", "17:00"]
        ];
        echo "<h3>Las horas del miércoles son:</h3><ul>";
        foreach ($horarios["Miércoles"] as $hora) {
            echo "<li>$hora</li>";
        }
        echo "</ul>";
        ?>

        <!-- Ejercicio 7 -->
        <?php
        echo "<h2>Ejercicio 7</h2>";
        echo "<h3>Crea una matriz 3x3 y calcula la suma de los elementos en su diagonal principal.</h3>";

        $matriz = [
            [2, 4, 6],
            [1, 5, 9],
            [7, 8, 3]
        ];
        $sumaDiagonal = 0;
        for ($i = 0; $i < count($matriz); $i++) {
            $sumaDiagonal += $matriz[$i][$i];
        }
        echo "<h3>La suma de los elementos de la diagonal principal es: $sumaDiagonal</h3>";
        ?>

    </div>
</body>

</html>
