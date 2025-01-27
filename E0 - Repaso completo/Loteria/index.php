<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- Crea un programa que simule un boleto de lotería con 5 números aleatorios 
     del 1 al 50. Verifica que no se repitan.

    Requerimientos:
        Usa un bucle y la función in_array() para garantizar que los números 
        sean únicos.
        Muestra los números en orden ascendente usando sort(). -->
    <h1>Boleto de Lotería</h1>

    <?php
    // Array para almacenar los números del boleto
    $boleto = [];

    // Generar 5 números únicos
    while (count($boleto) < 5) {
        $numero = rand(1, 50); // Generar un número aleatorio entre 1 y 50

        // Verificar si el número ya está en el array
        if (!in_array($numero, $boleto)) {
            $boleto[] = $numero; // Si no está, agregar al array
        }
    }

    // Ordenar los números en orden ascendente
    sort($boleto);

    // Mostrar el boleto
    echo "<h2>Números del boleto:</h2>";
    echo "<p>" . implode(" - ", $boleto) . "</p>"; // Convertir el array a una cadena separada por guiones
    ?>
</body>

</html>