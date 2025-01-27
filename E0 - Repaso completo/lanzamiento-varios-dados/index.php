<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Escribe un programa que simule el lanzamiento de tres dados y muestre 
     el resultado de cada uno, así como la suma total.

        Requerimientos:
            Utiliza un bucle for para generar los valores.
            Muestra los números y la suma total en una tabla. -->
    <h1>Simulación del Lanzamiento de Tres Dados</h1>

    <?php
    // Inicializamos variables
    $resultados = []; // Array para guardar los resultados de los dados
    $sumaTotal = 0;   // Variable para almacenar la suma total

    // Simulamos el lanzamiento de 3 dados usando un bucle for
    for ($i = 1; $i <= 3; $i++) {
        $dado = rand(1, 6); // Generamos un número aleatorio entre 1 y 6
        $resultados[] = $dado; // Guardamos el resultado en el array
        $sumaTotal += $dado;   // Sumamos el resultado al total
    }
    ?>

    <!-- Mostramos los resultados en una tabla -->
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Dado</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Recorremos el array de resultados para llenar la tabla
            foreach ($resultados as $indice => $resultado) {
                echo "<tr>
                        <td>Dado " . ($indice + 1) . "</td>
                        <td>$resultado</td>
                      </tr>";
            }
            ?>
            <tr>
                <td><strong>Suma Total</strong></td>
                <td><strong><?php echo $sumaTotal; ?></strong></td>
            </tr>
        </tbody>
    </table>
</body>
</html>