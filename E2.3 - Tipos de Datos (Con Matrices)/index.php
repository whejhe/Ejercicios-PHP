<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Document</title>
</head>

<body>
    <div class="containerTitle">
        <?php
        echo "<h1>Tipos de Datos (Con Matrices)</h1>"
            ?>
    </div>

    <div class="container">
        <!-- Ejercicio 1 -->
        <?php
        echo "<h2>Ejercicio 1</h2>";
        echo "<h3>Crea una matriz que contenga los nombres de cinco colores y luego
        imprime el tercer color en la matriz.</h3>";

        $colores = array("Rojo", "Verde", "Azul", "Amarillo", "Negro");
        $colorStyle;
        $color = $colores[2];

        if ($color == "Rojo") {
            $colorStyle = "#FF0000";
        } else if ($color == "Verde") {
            $colorStyle = "#00FF00";
        } else if ($color == "Azul") {
            $colorStyle = "#0000FF";
        } else if ($color == "Amarillo") {
            $colorStyle = "#FFFF00";
        } else if ($color == "Negro") {
            $colorStyle = "#000000";
        }

        echo "<h3 style='color: $colorStyle;'>$color</h3>";
        ?>


        <!-- Ejercicio 2 -->
        <?php
        echo "<h2>Ejercicio 2</h2>";
        echo "<h3>Crea una matriz asociativa para almacenar información de un coche
        (marca, modelo, año) y luego imprime el valor del modelo.
        Matrices multidimensionales</h3>";

        $coche = [
            "marca" => "Ford",
            "modelo" => "Mustang",
            "año" => 1969
        ];
        // ¿Existe alguna diferencia entre usar la primera y la segunda forma?
        $moto = array(
            "marca" => "Yamaha",
            "modelo" => "YBR",
            "año" => 2005
        );
        echo "<h3>El Modelo del coche es: $coche[modelo]</h3>";
        echo "<h3>El Modelos de la moto es: $moto[modelo]</h3>";

        ?>

        <!-- Ejercicio 3 -->
        <?php
        echo "<h2>Ejercicio 3</h2>";
        echo "<h3>Crea una matriz multidimensional que contenga información de tres estudiantes (nombre, edad, nota). Imprime el nombre del segundo estudiante. Usa la función print_r().</h3>";

        $estudiantes = [
            ["nombre" => "Juan", "edad" => 20, "nota" => 8.5],
            ["nombre" => "María", "edad" => 22, "nota" => 9.0],
            ["nombre" => "Pedro", "edad" => 21, "nota" => 7.8]
        ];

        echo "<h3>El nombre del segundo estudiante es: " . $estudiantes[1]["nombre"] . "</h3>";
        echo "<pre>";
        print_r($estudiantes);
        echo "</pre>";
        ?>

        <!-- Ejercicio 4 -->
        <?php
        echo "<h2>Ejercicio 4</h2>";
        echo "<h3>Crea una matriz con los días de la semana y usa la función print_r() para imprimirla.</h3>";

        $diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
        echo "<pre>";
        print_r($diasSemana);
        echo "</pre>";
        ?>

        <!-- Ejercicio 5 -->
        <?php
        echo "<h2>Ejercicio 5</h2>";
        echo "<h3>Crea una matriz con tres números y añade dos números más a la matriz.</h3>";

        $numeros = [10, 20, 30];
        array_push($numeros, 40, 50);
        echo "<pre>";
        print_r($numeros);
        echo "</pre>";
        ?>

        <!-- Ejercicio 6 -->
        <?php
        echo "<h2>Ejercicio 6</h2>";
        echo "<h3>Crea dos matrices, una con los nombres de tres frutas y otra con tres verduras. Únelas en una sola matriz.</h3>";

        $frutas = ["Manzana", "Banana", "Pera"];
        $verduras = ["Zanahoria", "Tomate", "Lechuga"];
        $combinado = array_merge($frutas, $verduras);

        echo "<pre>";
        print_r($combinado);
        echo "</pre>";
        ?>

        <!-- Ejercicio 7 -->
        <?php
        echo "<h2>Ejercicio 7</h2>";
        echo "<h3>Crea una matriz con tres valores, utiliza count() para mostrar cuántos elementos tiene.</h3>";

        $valores = [5, 10, 15];
        echo "<h3>La cantidad de elementos en la matriz es: " . count($valores) . "</h3>";
        ?>

        <!-- Ejercicio 8 -->
        <?php
        echo "<h2>Ejercicio 8</h2>";
        echo "<h3>Crea una matriz con cinco números y elimina el tercer número usando unset().</h3>";

        $numeros = [1, 2, 3, 4, 5];
        unset($numeros[2]); // Elimina el tercer número
        
        echo "<pre>";
        print_r($numeros);
        echo "</pre>";
        ?>

        <!-- Ejercicio 9 -->
        <?php
        echo "<h2>Ejercicio 9</h2>";
        echo "<h3>Crea una matriz y luego copia sus valores a otra variable.</h3>";

        $original = [100, 200, 300];
        $copia = $original;

        echo "<h3>Matriz original:</h3><pre>";
        print_r($original);
        echo "</pre>";

        echo "<h3>Matriz copiada:</h3><pre>";
        print_r($copia);
        echo "</pre>";
        ?>

        <!-- Ejercicio 10 -->
        <?php
        echo "<h2>Ejercicio 10</h2>";
        echo "<h3>Define una constante con el valor de la velocidad de la luz en metros por segundo y úsala para mostrarla en pantalla.</h3>";

        define("VELOCIDAD_LUZ", 299792458);
        echo "<h3>La velocidad de la luz es: " . VELOCIDAD_LUZ . " metros por segundo.</h3>";
        ?>

        <!-- Ejercicio 11 -->
        <?php
        echo "<h2>Ejercicio 11</h2>";
        echo "<h3>Crea una constante para el nombre de una aplicación web y muestra su valor en un mensaje.</h3>";

        define("NOMBRE_APP", "MiAplicacionWeb");
        echo "<h3>Bienvenido a " . NOMBRE_APP . "</h3>";
        ?>

        <!-- Ejercicio 12 -->
        <?php
        echo "<h2>Ejercicio 12</h2>";
        echo "<h3>Usa la constante predefinida PHP_VERSION para mostrar la versión actual de PHP en la que se está ejecutando el script.</h3>";

        echo "<h3>La versión actual de PHP es: " . PHP_VERSION . "</h3>";
        ?>

        <!-- Ejercicio 13 -->
        <?php
        echo "<h2>Ejercicio 13</h2>";
        echo "<h3>Crea un script que use get_defined_constants() para mostrar todas las constantes predefinidas disponibles en tu entorno PHP.</h3>";

        echo "<pre>";
        print_r(get_defined_constants());
        echo "</pre>";
        ?>

    </div>
</body>

</html>