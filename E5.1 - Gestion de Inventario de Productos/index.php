<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de Inventarios</title>
</head>
<body>
    <h1>Gestor de Inventarios</h1>

    <?php
    $inventarioTienda = [
        ["Producto" => "Teclado", "Precio" => 20, "Categoría" => "Electrónica", "Cantidad" => 4],
        ["Producto" => "Ratón", "Precio" => 15, "Categoría" => "Electrónica", "Cantidad" => 10],
        ["Producto" => "Monitor", "Precio" => 100, "Categoría" => "Electrónica", "Cantidad" => 3],
        ["Producto" => "Silla", "Precio" => 80, "Categoría" => "Muebles", "Cantidad" => 5]
    ];

    $inventarioProveedorA = [
        ["Producto" => "Ratón", "Precio" => 10, "Categoría" => "Electrónica", "Cantidad" => 20],
        ["Producto" => "Lámpara", "Precio" => 25, "Categoría" => "Iluminación", "Cantidad" => 15],
        ["Producto" => "Escritorio", "Precio" => 50, "Categoría" => "Muebles", "Cantidad" => 2]
    ];

    $inventarioProveedorB = [
        ["Producto" => "Monitor", "Precio" => 92, "Categoría" => "Electrónica", "Cantidad" => 8],
        ["Producto" => "Auriculares", "Precio" => 30, "Categoría" => "Electrónica", "Cantidad" => 20],
        ["Producto" => "Lámpara", "Precio" => 20, "Categoría" => "Iluminación", "Cantidad" => 5]
    ];

    // Función para unir y organizar los inventarios
    function unirInventarios(...$inventarios) {
        $unido = [];
        foreach ($inventarios as $inventario) {
            $unido = array_merge($unido, $inventario);
        }
        return $unido;
    }

    // Función para eliminar productos duplicados
    function eliminarDuplicados($inventario) {
        $productosUnicos = [];
        foreach ($inventario as $item) {
            $productosUnicos[$item['Producto']] = $item;
        }
        return array_values($productosUnicos);
    }

    // Función para contar productos por categoría
    function contarPorCategoria($inventario) {
        $conteo = [];
        foreach ($inventario as $item) {
            $categoria = $item['Categoría'];
            $conteo[$categoria] = ($conteo[$categoria] ?? 0) + 1;
        }
        return $conteo;
    }

    // Función para ordenar por precio
    function ordenarPorPrecio($inventario, $asc = true) {
        usort($inventario, function($a, $b) use ($asc) {
            return $asc ? $a['Precio'] <=> $b['Precio'] : $b['Precio'] <=> $a['Precio'];
        });
        return $inventario;
    }

    // Función para dividir en secciones
    function dividirEnSecciones($inventario, $tamaño) {
        return array_chunk($inventario, $tamaño);
    }

    // Función para buscar y contar productos
    function buscarProducto($inventario, $nombreProducto) {
        $conteo = 0;
        foreach ($inventario as $item) {
            if (strtolower($item['Producto']) === strtolower($nombreProducto)) {
                $conteo++;
            }
        }
        return $conteo;
    }

    // Función para generar informe
    function generarInforme($inventario) {
        $informe = [];
        foreach ($inventario as $item) {
            $informe[$item['Producto']] = [
                'Precio' => $item['Precio'],
                'Categoría' => $item['Categoría'],
                'Cantidad' => $item['Cantidad']
            ];
        }
        return $informe;
    }

    $inventarioUnido = unirInventarios($inventarioTienda, $inventarioProveedorA, $inventarioProveedorB);
    $inventarioUnico = eliminarDuplicados($inventarioUnido);
    $conteoCategorias = contarPorCategoria($inventarioUnico);
    $inventarioOrdenado = ordenarPorPrecio($inventarioUnico);
    $secciones = dividirEnSecciones($inventarioOrdenado, 2);
    $productoBuscado = "Lámpara";
    $conteoProducto = buscarProducto($inventarioUnido, $productoBuscado);
    $informe = generarInforme($inventarioUnico);

    ?>

    <h2>Inventario Unido</h2>
    <pre><?php print_r($inventarioUnido); ?></pre>

    <h2>Inventario Sin Duplicados</h2>
    <pre><?php print_r($inventarioUnico); ?></pre>

    <h2>Conteo por Categorías</h2>
    <pre><?php print_r($conteoCategorias); ?></pre>

    <h2>Inventario Ordenado por Precio</h2>
    <pre><?php print_r($inventarioOrdenado); ?></pre>

    <h2>Secciones del Inventario</h2>
    <pre><?php print_r($secciones); ?></pre>

    <h2>Búsqueda de Producto: <?php echo $productoBuscado; ?></h2>
    <p>El producto "<?php echo $productoBuscado; ?>" aparece <?php echo $conteoProducto; ?> vez/veces en el inventario.</p>

    <h2>Informe del Inventario</h2>
    <pre><?php print_r($informe); ?></pre>

</body>
</html>
