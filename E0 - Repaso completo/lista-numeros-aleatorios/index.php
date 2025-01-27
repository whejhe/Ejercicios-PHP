<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Haz un programa que genere 10 números aleatorios entre 1 y 100. 
     Luego:
        Muéstralos en pantalla.
        Calcula y muestra el promedio de esos números.

    Requerimientos:
        Utiliza un array para almacenar los números.
        Usa funciones como array_sum() y count() para el promedio. -->
    <h1>Generación de Números Aleatorios</h1>

    <?php
    // Array para almacenar los números aleatorios
    $numeros = [];

    // Generar 10 números aleatorios entre 1 y 100
    for ($i = 0; $i < 10; $i++) {
        $numeros[] = rand(1, 100); // Generamos un número aleatorio y lo agregamos al array
    }

    // Calcular el promedio usando array_sum() y count()
    $promedio = array_sum($numeros) / count($numeros);

    // Mostrar los números generados
    echo "<h2>Números Generados:</h2>";
    echo "<p>" . implode(", ", $numeros) . "</p>"; // Convertimos el array a una cadena separada por comas

    // Mostrar el promedio
    echo "<h2>Promedio:</h2>";
    echo "<p>" . number_format($promedio, 2) . "</p>"; // Mostramos el promedio con 2 decimales
    ?>
</body>

</html>