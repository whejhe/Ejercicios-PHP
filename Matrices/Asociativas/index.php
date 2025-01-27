<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $lineasMetro = [
        [
            "linea" => "Línea 1",
            "longitud_km" => 23.9,
            "max_trenes" => 30,
            "paradas" => [
                ["nombre" => "Sol", "subidas" => 1200, "bajadas" => 1100, "transbordo" => true],
                ["nombre" => "Gran Vía", "subidas" => 950, "bajadas" => 1020, "transbordo" => true],
                ["nombre" => "Cuatro Caminos", "subidas" => 700, "bajadas" => 650, "transbordo" => false]
            ]
        ],
        [
            "linea" => "Línea 2",
            "longitud_km" => 14.5,
            "max_trenes" => 25,
            "paradas" => [
                ["nombre" => "Retiro", "subidas" => 800, "bajadas" => 750, "transbordo" => false],
                ["nombre" => "Goya", "subidas" => 1000, "bajadas" => 1200, "transbordo" => true],
                ["nombre" => "Ventas", "subidas" => 600, "bajadas" => 500, "transbordo" => false]
            ]
        ]
    ];
    ?>

    <!-- Ejercicio 1 -->
    <!-- Mostrar información básica de las líneas de metro.
    1. Recorre la matriz y muestra los nombres de las líneas y su longitud.
    2. Muestra el número total de paradas de cada línea. -->
    <h3>Información básica de las líneas de metro</h3>
    <?php
    foreach ($lineasMetro as $linea) {
        // Mostrar el nombre de la línea y su longitud
        echo "Nombre de la línea: " . $linea["linea"] . "<br>";
        echo "Longitud: " . $linea["longitud_km"] . " km<br>";

        // Calcular el número total de paradas
        $numeroParadas = count($linea["paradas"]); // Contar las paradas
        echo "Número total de paradas: " . $numeroParadas . "<br>";

        echo "<hr>";
    }
    ?>


    <!-- Ejercicio 2 -->
    <!-- Calcular el total de subidas y bajadas en todas las líneas.
    1. Recorre la matriz y calcula cuántas personas subieron y bajaron 
    en total en cada línea.
    2. Determina qué línea tuvo más subidas y bajadas. -->
    <h3>Calcular el total de subidas y bajadas en todas las líneas</h3>
    <?php
    // Variables para determinar qué línea tuvo más subidas y bajadas
    $lineaMaxSubidas = "";
    $maxSubidas = 0;

    $lineaMaxBajadas = "";
    $maxBajadas = 0;

    foreach ($lineasMetro as $linea) {
        $totalSubidas = 0; // Reiniciar el contador de subidas por línea
        $totalBajadas = 0; // Reiniciar el contador de bajadas por línea

        // Recorrer las paradas de la línea y sumar subidas y bajadas
        foreach ($linea['paradas'] as $parada) {
            $totalSubidas += $parada['subidas'];
            $totalBajadas += $parada['bajadas'];
        }

        // Mostrar resultados parciales para cada línea
        echo "Línea: " . $linea['linea'] . "<br>";
        echo "Total de subidas: " . $totalSubidas . "<br>";
        echo "Total de bajadas: " . $totalBajadas . "<br>";
        echo "<br>";

        // Comparar para determinar la línea con más subidas
        if ($totalSubidas > $maxSubidas) {
            $maxSubidas = $totalSubidas;
            $lineaMaxSubidas = $linea['linea'];
        }

        // Comparar para determinar la línea con más bajadas
        if ($totalBajadas > $maxBajadas) {
            $maxBajadas = $totalBajadas;
            $lineaMaxBajadas = $linea['linea'];
        }
    }

    // Mostrar los resultados finales
    echo "<h4>Resumen:</h4>";
    echo "La línea con más subidas es: " . $lineaMaxSubidas . " con " . $maxSubidas . " subidas.<br>";
    echo "La línea con más bajadas es: " . $lineaMaxBajadas . " con " . $maxBajadas . " bajadas.<br>";
    ?>


    <!-- Ejercicio 3 -->
    <!-- Mostrar paradas donde se puede hacer transbordo.
    1. Recorre la matriz y extrae las paradas con transbordo.
    2. Genera una lista con el nombre de las líneas y sus paradas con transbordo. -->
    <h3>Mostrar paradas donde se puede hacer transbordo</h3>
    <?php
    foreach ($lineasMetro as $linea) {
        // Mostrar el nombre de la línea
        echo "<strong>Línea: " . $linea["linea"] . "</strong><br>";
        echo "Paradas con transbordo:<br>";

        $tieneTransbordo = false; // Bandera para verificar si hay paradas con transbordo

        // Recorrer las paradas de la línea
        foreach ($linea["paradas"] as $parada) {
            if ($parada["transbordo"]) {
                // Imprimir el nombre de la parada si tiene transbordo
                echo "- " . $parada["nombre"] . "<br>";
                $tieneTransbordo = true;
            }
        }

        // Si no hay paradas con transbordo, indicarlo
        if (!$tieneTransbordo) {
            echo "No hay paradas con transbordo en esta línea.<br>";
        }

        echo "<hr>"; // Separador entre líneas
    }
    ?>


    <!-- Ejercicio 4 -->
    <!-- Ordenar las líneas de metro según su longitud.
    1. Ordena la matriz principal en orden descendente de longitud.
    2. Muestra las líneas ordenadas. -->
    <h3>Ordenar las líneas de metro por longitud</h3>
    <?php
    // Ordenar manualmente la matriz por longitud en orden descendente
    for ($i = 0; $i < count($lineasMetro) - 1; $i++) {
        for ($j = 0; $j < count($lineasMetro) - $i - 1; $j++) {
            // Comparar las longitudes de dos líneas consecutivas
            if ($lineasMetro[$j]["longitud_km"] < $lineasMetro[$j + 1]["longitud_km"]) {
                // Intercambiar las posiciones si no están en el orden correcto
                $temp = $lineasMetro[$j];
                $lineasMetro[$j] = $lineasMetro[$j + 1];
                $lineasMetro[$j + 1] = $temp;
            }
        }
    }

    // Mostrar las líneas ya ordenadas
    foreach ($lineasMetro as $linea) {
        echo "Línea: " . $linea["linea"] . "<br>";
        echo "Longitud: " . $linea["longitud_km"] . " km<br>";
        echo "<hr>";
    }
    ?>

    <!-- Ejercicio 5 -->
    <!-- Crear un reporte tabular de las líneas y sus paradas.
    1. Muestra una tabla con:
    ○ Línea, Nombre de la parada, Subidas, Bajadas, Transbordo.
    2. Calcula y muestra el total de subidas y bajadas por línea al final de cada tabla. -->
    <h3>Reporte tabular de las líneas y sus paradas</h3>
    <?php
    foreach ($lineasMetro as $linea) {
        echo "<h4>" . $linea["linea"] . "</h4>";

        // Crear tabla para mostrar las paradas
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>
                <th>Nombre de la parada</th>
                <th>Subidas</th>
                <th>Bajadas</th>
                <th>Transbordo</th>
              </tr>";

        // Variables para calcular totales
        $totalSubidas = 0;
        $totalBajadas = 0;

        // Recorrer las paradas de la línea
        foreach ($linea["paradas"] as $parada) {
            echo "<tr>";
            echo "<td>" . $parada["nombre"] . "</td>";
            echo "<td>" . $parada["subidas"] . "</td>";
            echo "<td>" . $parada["bajadas"] . "</td>";
            echo "<td>" . ($parada["transbordo"] ? "Sí" : "No") . "</td>";
            echo "</tr>";

            // Sumar subidas y bajadas
            $totalSubidas += $parada["subidas"];
            $totalBajadas += $parada["bajadas"];
        }

        // Mostrar totales al final de la tabla
        echo "<tr>
                <td><strong>Total</strong></td>
                <td><strong>" . $totalSubidas . "</strong></td>
                <td><strong>" . $totalBajadas . "</strong></td>
                <td></td>
              </tr>";

        echo "</table><br><hr>";
    }
    ?>

    <!-- Ejercicio 6 -->
    <!-- Permitir buscar información sobre una parada específica.
    1. Solicita al usuario el nombre de una parada.
    2. Busca la parada en todas las líneas y muestra:
    ○ Nombre de la línea.
    ○ Subidas y bajadas en esa parada.
    ○ Si permite transbordo. -->
    <h3>Permitir buscar información sobre una parada específica</h3>

    <!-- Formulario para solicitar el nombre de la parada -->
    <form method="POST">
        <label for="parada">Nombre de la parada:</label>
        <input type="text" name="parada" id="parada" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $nombreParadaBuscada = $_POST["parada"];
        $encontrado = false;

        // Buscar la parada en todas las líneas
        foreach ($lineasMetro as $linea) {
            foreach ($linea["paradas"] as $parada) {
                if (strcasecmp($parada["nombre"], $nombreParadaBuscada) === 0) { // Comparación sin distinguir mayúsculas/minúsculas
                    echo "<h4>Información de la parada: " . htmlspecialchars($nombreParadaBuscada) . "</h4>";
                    echo "Línea: " . $linea["linea"] . "<br>";
                    echo "Subidas: " . $parada["subidas"] . "<br>";
                    echo "Bajadas: " . $parada["bajadas"] . "<br>";
                    echo "Transbordo: " . ($parada["transbordo"] ? "Sí" : "No") . "<br>";
                    echo "<hr>";
                    $encontrado = true;
                }
            }
        }

        // Mostrar mensaje si no se encuentra la parada
        if (!$encontrado) {
            echo "<p>La parada <strong>" . htmlspecialchars($nombreParadaBuscada) . "</strong> no se encontró en ninguna línea.</p>";
        }
    }
    ?>

    <!-- Ejercicio 7 -->
    <!-- Calcular y mostrar el promedio de personas que suben y bajan en cada línea.
    1. Recorre cada línea y calcula el promedio de subidas y bajadas por parada.
    2. Muestra los resultados. -->
    <h3>Calcular y mostrar el promedio de personas que suben y bajan en cada línea</h3>
    <?php
    foreach ($lineasMetro as $linea) {
        // Variables para acumular subidas y bajadas
        $totalSubidas = 0;
        $totalBajadas = 0;
        $numeroParadas = count($linea["paradas"]);

        // Recorrer las paradas para sumar subidas y bajadas
        foreach ($linea["paradas"] as $parada) {
            $totalSubidas += $parada["subidas"];
            $totalBajadas += $parada["bajadas"];
        }

        // Calcular promedios
        $promedioSubidas = $numeroParadas > 0 ? $totalSubidas / $numeroParadas : 0;
        $promedioBajadas = $numeroParadas > 0 ? $totalBajadas / $numeroParadas : 0;

        // Mostrar resultados
        echo "<h4>" . $linea["linea"] . "</h4>";
        echo "Promedio de subidas por parada: " . number_format($promedioSubidas, 2) . "<br>";
        echo "Promedio de bajadas por parada: " . number_format($promedioBajadas, 2) . "<br>";
        echo "<hr>";
    }
    ?>

    <!-- Ejercicio 8 -->
    <!-- Identificar la línea con mayor cantidad de personas (subidas + bajadas).
    1. Calcula la afluencia total (subidas + bajadas) para cada línea.
    2. Determina y muestra cuál es la línea con mayor afluencia. -->
    <h3>Identificar la línea con mayor cantidad de personas</h3>
    <?php
    $lineaMayorAfluencia = "";
    $maxAfluencia = 0;

    foreach ($lineasMetro as $linea) {
        // Calcular la afluencia total (subidas + bajadas) para la línea
        $afluenciaTotal = 0;

        foreach ($linea["paradas"] as $parada) {
            $afluenciaTotal += $parada["subidas"] + $parada["bajadas"];
        }

        // Comparar con la mayor afluencia registrada
        if ($afluenciaTotal > $maxAfluencia) {
            $maxAfluencia = $afluenciaTotal;
            $lineaMayorAfluencia = $linea["linea"];
        }
    }

    // Mostrar la línea con mayor afluencia
    if ($lineaMayorAfluencia !== "") {
        echo "<p>La línea con mayor cantidad de personas es: <strong>" . $lineaMayorAfluencia . "</strong></p>";
        echo "<p>Afluencia total: " . $maxAfluencia . " personas.</p>";
    } else {
        echo "<p>No se encontraron datos de afluencia.</p>";
    }
    ?>

    <!-- Ejercicio 9 -->
    <!-- Calcular cuántas paradas permiten transbordo en cada línea.
    1. Recorre las paradas de cada línea y cuenta cuántas permiten transbordo.
    2. Muestra el número de paradas con transbordo por línea. -->
    <h3>Calcular cuántas paradas permiten transbordo en cada línea</h3>
    <?php
    foreach ($lineasMetro as $linea) {
        $contadorTransbordos = 0;

        // Recorrer las paradas de la línea
        foreach ($linea["paradas"] as $parada) {
            if ($parada["transbordo"]) {
                $contadorTransbordos++;
            }
        }

        // Mostrar el resultado para la línea actual
        echo "<h4>" . $linea["linea"] . "</h4>";
        echo "Número de paradas con transbordo: " . $contadorTransbordos . "<br>";
        echo "<hr>";
    }
    ?>

    <!-- Ejercicio 10 -->
    <!-- Resumir toda la información en estadísticas globales.
    1. Calcula y muestra:
        ○ Total de líneas.
        ○ Total de paradas.
        ○ Promedio de longitud de las líneas.
        ○ Línea más corta y más larga. -->
    <h3>Resumir toda la información en estadísticas globales</h3>
    <?php
    // Inicializar variables para estadísticas globales
    $totalLineas = count($lineasMetro);
    $totalParadas = 0;
    $sumaLongitudes = 0;
    $lineaMasLarga = null;
    $lineaMasCorta = null;
    $longitudMax = 0;
    $longitudMin = PHP_FLOAT_MAX;

    // Recorrer las líneas para calcular estadísticas
    foreach ($lineasMetro as $linea) {
        // Contar total de paradas
        $totalParadas += count($linea["paradas"]);

        // Sumar longitud de las líneas
        $sumaLongitudes += $linea["longitud_km"];

        // Determinar la línea más larga y más corta
        if ($linea["longitud_km"] > $longitudMax) {
            $longitudMax = $linea["longitud_km"];
            $lineaMasLarga = $linea["linea"];
        }

        if ($linea["longitud_km"] < $longitudMin) {
            $longitudMin = $linea["longitud_km"];
            $lineaMasCorta = $linea["linea"];
        }
    }

    // Calcular el promedio de longitud
    $promedioLongitud = $totalLineas > 0 ? $sumaLongitudes / $totalLineas : 0;

    // Mostrar estadísticas globales
    echo "<p>Total de líneas: <strong>" . $totalLineas . "</strong></p>";
    echo "<p>Total de paradas: <strong>" . $totalParadas . "</strong></p>";
    echo "<p>Promedio de longitud de las líneas: <strong>" . number_format($promedioLongitud, 2) . " km</strong></p>";
    echo "<p>Línea más larga: <strong>" . $lineaMasLarga . "</strong> (" . $longitudMax . " km)</p>";
    echo "<p>Línea más corta: <strong>" . $lineaMasCorta . "</strong> (" . $longitudMin . " km)</p>";
    ?>

</body>

</html>