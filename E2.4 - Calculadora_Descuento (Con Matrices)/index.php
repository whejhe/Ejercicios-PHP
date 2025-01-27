<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
        const DESCUENTO_PEQUENO = 10;
        const LIMITE_DESCUENTO = 50;
        const LIMITE_COMPRA_GRANDE = 100;

        $productos = [
            ["nombre" => "Producto 1", "cantidad" => 101, "precioUnidad" => 1.00],
            ["nombre" => "Producto 2", "cantidad" => 51, "precioUnidad" => 1.00],
            ["nombre" => "Producto 3", "cantidad" => 10, "precioUnidad" => 1.00],
        ];

        $totalSinDescuento = 0;
        $totalConDescuento = 0;

        foreach ($productos as $producto) {
            $totalSinDescuento += $producto['cantidad'] * $producto['precioUnidad'];
        }

        if ($totalSinDescuento > LIMITE_DESCUENTO) {
            $totalConDescuento = $totalSinDescuento - ($totalSinDescuento * DESCUENTO_PEQUENO / 100);
            if($totalConDescuento > LIMITE_COMPRA_GRANDE) {
                $totalConDescuento = $totalSinDescuento - ($totalSinDescuento * DESCUENTO_PEQUENO / 100);
            }
        } else {
            $totalConDescuento = $totalSinDescuento;
        }

        $totalSinDescuento = number_format($totalSinDescuento, 2, ',', '.');
        $totalConDescuento = number_format($totalConDescuento, 2, ',', '.');

        $resumenCompra = "Resumen de la compra:\n";
        foreach ($productos as $producto) {
            $resumenCompra .= " - " . $producto['nombre'] . " x " . $producto['cantidad'] . " = " . number_format($producto['cantidad'] * $producto['precioUnidad'], 2, ',', '.') . "\n";
        }
        $resumenCompra .= "Total sin descuento: " . $totalSinDescuento . "\n";
        $resumenCompra .= "Total con descuento: " . $totalConDescuento . "\n";

        $resumenCompra = nl2br($resumenCompra);

        echo $resumenCompra;
        ?>
    </div>
</body>
</html>