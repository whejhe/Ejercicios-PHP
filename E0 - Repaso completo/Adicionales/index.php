<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Ejercicios Adicionales PHP</title>
</head>

<body>
    <div class="containerTitle">
        <?php
        echo "<h1>EJERCICIOS ADICIONALES PHP</h1>";
        ?>
    </div>
    <div class="container">
        <!-- 1. Números Aleatorios: 
        Genera un número aleatorio entre 1 y 100 y muéstralo. -->
        <?php
        echo "<h2>Ejercicio 1</h2>";
        echo "<h3>Números Aleatorios: Genera un número aleatorio entre 1 y 100 y muéstralo.</h3>";
        $aleatorio = rand(1, 100); // Función rand() genera un número aleatorio
        echo "<p>Número aleatorio: $aleatorio</p>";
        ?>

        <!-- 2. Tablas de Multiplicar:
        Genera la tabla de multiplicar de un número específico. -->
        <?php
        echo "<h2>Ejercicio 2</h2>";
        echo "<h3>Tablas de Multiplicar: Genera la tabla de multiplicar de un número específico.</h3>";
        $numero = 5; // Número base para la tabla de multiplicar
        echo "<ul>";
        for ($i = 1; $i <= 10; $i++) { // Bucle para iterar del 1 al 10
            $resultado = $numero * $i;
            echo "<li>$numero x $i = $resultado</li>";
        }
        echo "</ul>";
        ?>

        <!-- 3. Verificar Número Primo:
        Determina si un número es primo. -->
        <?php
        echo "<h2>Ejercicio 3</h2>";
        echo "<h3>Verificar Número Primo: Determina si un número es primo.</h3>";
        $numero = 7; // Número a verificar
        $esPrimo = true; // Variable bandera para verificar primos

        if ($numero <= 1) {
            $esPrimo = false; // Los números menores o iguales a 1 no son primos
        } else {
            for ($i = 2; $i <= sqrt($numero); $i++) {
                if ($numero % $i == 0) {
                    $esPrimo = false; // Si tiene un divisor distinto de 1 y sí mismo, no es primo
                    break;
                }
            }
        }

        if ($esPrimo) {
            echo "<p>El número $numero es primo.</p>";
        } else {
            echo "<p>El número $numero no es primo.</p>";
        }
        ?>

        <!-- 4. Factorial de un Número:
        Calcula el factorial de un número. -->
        <?php
        echo "<h2>Ejercicio 4</h2>";
        echo "<h3>Factorial de un Número: Calcula el factorial de un número.</h3>";
        $numero = 5; // Número para calcular el factorial
        $factorial = 1; // Inicializamos el factorial en 1

        for ($i = 1; $i <= $numero; $i++) {
            $factorial *= $i; // Multiplicamos sucesivamente
        }

        echo "<p>El factorial de $numero es $factorial.</p>";
        ?>

        <!-- 5. Invertir una Cadena:
        Invierte el texto de una cadena. -->
        <?php
        echo "<h2>Ejercicio 5</h2>";
        echo "<h3>Invertir una Cadena: Invierte el texto de una cadena.</h3>";
        $cadena = "Hola mundo"; // Cadena a invertir
        $cadenaInvertida = strrev($cadena); // Función strrev invierte la cadena
        echo "<p>Original: $cadena</p>";
        echo "<p>Invertida: $cadenaInvertida</p>";
        ?>

        <!-- 6. Contar Palabras:
        Cuenta el número de palabras en una cadena. -->
        <?php
        echo "<h2>Ejercicio 6</h2>";
        echo "<h3>Contar Palabras: Cuenta el número de palabras en una cadena.</h3>";
        $cadena = "Hola mundo este es un ejercicio"; // Cadena a analizar
        $contadorPalabras = str_word_count($cadena); // Función que cuenta palabras
        echo "<p>Texto: $cadena</p>";
        echo "<p>Número de palabras: $contadorPalabras</p>";
        ?>

        <!-- 7. Ordenar un Array:
        Ordena un array numérico en orden ascendente y descendente. -->
        <?php
        echo "<h2>Ejercicio 7</h2>";
        echo "<h3>Ordenar un Array: Ordena un array numérico en orden ascendente y descendente.</h3>";
        $numeros = [3, 1, 4, 1, 5, 9]; // Array de números
        sort($numeros); // Ordenar en orden ascendente
        echo "<p>Ascendente: " . implode(", ", $numeros) . "</p>";

        rsort($numeros); // Ordenar en orden descendente
        echo "<p>Descendente: " . implode(", ", $numeros) . "</p>";
        ?>

        <!-- 8. Calcular Promedio:
        Calcula el promedio de un conjunto de números. -->
        <?php
        echo "<h2>Ejercicio 8</h2>";
        echo "<h3>Calcular Promedio: Calcula el promedio de un conjunto de números.</h3>";
        $numeros = [10, 20, 30, 40, 50]; // Array de números
        $suma = array_sum($numeros); // Suma de los elementos
        $cantidad = count($numeros); // Cantidad de elementos
        $promedio = $suma / $cantidad; // Cálculo del promedio
        echo "<p>Promedio: $promedio</p>";
        ?>

    </div>
</body>

</html>