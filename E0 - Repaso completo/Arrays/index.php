<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Ejercicios PHP</title>
</head>

<body>
    <div class="containerTitle">
        <?php
        echo "<h1>Ejercicios Básicos con Arrays en PHP</h1>";
        ?>
    </div>

    <div class="container">
        <!-- Ejercicio 1 -->
        <?php
        echo "<h2>Ejercicio 1</h2>";
        echo "<h3>Crea un array con los nombres de cinco ciudades y muestra la primera ciudad.</h3>";

        $ciudades = ["París", "Londres", "Nueva York", "Tokio", "Berlín"];
        echo "<h3>La primera ciudad es: " . $ciudades[0] . "</h3>";
        ?>

        <!-- Ejercicio 2 -->
        <?php
        echo "<h2>Ejercicio 2</h2>";
        echo "<h3>Crea un array asociativo con tres libros (título, autor, año). Muestra el autor del segundo libro.</h3>";

        $libros = [
            ["título" => "1984", "autor" => "George Orwell", "año" => 1949],
            ["título" => "Cien Años de Soledad", "autor" => "Gabriel García Márquez", "año" => 1967],
            ["título" => "Matar a un Ruiseñor", "autor" => "Harper Lee", "año" => 1960]
        ];
        echo "<h3>El autor del segundo libro es: " . $libros[1]["autor"] . "</h3>";
        ?>

        <!-- Ejercicio 3 -->
        <?php
        echo "<h2>Ejercicio 3</h2>";
        echo "<h3>Agrega dos elementos a un array de animales y muéstralo.</h3>";

        $animales = ["Perro", "Gato", "Caballo"];
        array_push($animales, "Elefante", "Tigre");
        echo "<pre>";
        print_r($animales);
        echo "</pre>";
        ?>

        <!-- Ejercicio 4 -->
        <?php
        echo "<h2>Ejercicio 4</h2>";
        echo "<h3>Crea un array con números y calcula la suma de todos los elementos.</h3>";

        $numeros = [5, 10, 15, 20, 25];
        $suma = array_sum($numeros);
        echo "<h3>La suma de los números es: $suma</h3>";
        ?>

        <!-- Ejercicio 5 -->
        <?php
        echo "<h2>Ejercicio 5</h2>";
        echo "<h3>Crea un array con los nombres de tres personas y cambia el segundo nombre a 'Ana'.</h3>";

        $personas = ["Carlos", "Luis", "María"];
        $personas[1] = "Ana";
        echo "<pre>";
        print_r($personas);
        echo "</pre>";
        ?>

        <!-- Ejercicio 6 -->
        <?php
        echo "<h2>Ejercicio 6</h2>";
        echo "<h3>Crea un array multidimensional con datos de tres países (nombre, capital, población). Muestra la capital del tercer país.</h3>";

        $paises = [
            ["nombre" => "España", "capital" => "Madrid", "población" => 47450795],
            ["nombre" => "Francia", "capital" => "París", "población" => 67372000],
            ["nombre" => "Alemania", "capital" => "Berlín", "población" => 83149300]
        ];
        echo "<h3>La capital del tercer país es: " . $paises[2]["capital"] . "</h3>";
        ?>

        <!-- Ejercicio 7 -->
        <?php
        echo "<h2>Ejercicio 7</h2>";
        echo "<h3>Crea un array con los días de la semana en inglés y úsalo para imprimir 'Hoy es lunes'.</h3>";

        $dias = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        echo "<h3>Hoy es: " . $dias[0] . "</h3>";
        ?>

        <!-- Ejercicio 8 -->
        <?php
        echo "<h2>Ejercicio 8</h2>";
        echo "<h3>Crea un array asociativo con nombres y edades. Ordena el array por edades (ascendente) y muéstralo.</h3>";

        $edades = ["Carlos" => 25, "Ana" => 20, "Luis" => 30];
        asort($edades); // Ordenar por valores
        echo "<pre>";
        print_r($edades);
        echo "</pre>";
        ?>

    </div>
</body>

</html>
