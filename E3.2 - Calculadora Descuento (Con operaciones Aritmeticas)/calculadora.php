<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Calculadora Descuento</title>
</head>
<body>
    <?php 
    // Definición de constante
    $LIMITE_CANTIDAD_ADICIONAL = 40;
    $IVA = 0.15;
    $DESCUENTO_ADICIONAL = 0.05;

    // Obtener datos del formulario
    $nombre = $_POST['nombre'];
    $cantidad = (int)$_POST['cantidad'];
    $precioUnidad = (float)$_POST['precioUnidad'];
    $descuento = (float)$_POST['descuento'];

    // Cálculo total inicial
    $total = $cantidad * $precioUnidad;

    // Aplicar el primer descuento
    $totalConDescuento = $total - ($total * $descuento / 100);

    // Aplicar descuento adicional si la cantidad total supera el límite
    if ($cantidad > $LIMITE_CANTIDAD_ADICIONAL) {
        $totalConDescuento -= $totalConDescuento * $DESCUENTO_ADICIONAL;
    }

    // Calcular el IVA sobre el total con descuento
    $iva = $totalConDescuento * $IVA;
    $totalConImpuestos = $totalConDescuento + $iva;

    // Determinar si la cantidad de productos es par o impar
    $esPar = ($cantidad % 2 === 0) ? "par" : "impar";

    // Cálculo del precio promedio por unidad
    $precioPromedio = $total / $cantidad;

    // Determinar promoción especial (producto gratis si el total supera 100€ y cantidad supera 20)
    $promocionEspecial = "";

    if ($totalConDescuento > 100 && $cantidad > 20) {
        $promocionEspecial = "¡Promoción especial! Producto gratis incluido.";
    } else {
        $promocionEspecial = "No aplica promoción especial.";
    }

    // Formatear los totales para mostrar con dos decimales
    $total = number_format($total, 2);
    $totalConDescuento = number_format($totalConDescuento, 2);
    $iva = number_format($iva, 2, ",",".");
    $totalConImpuestos = number_format($totalConImpuestos, 2);
    $precioPromedio = number_format($precioPromedio, 2);

    // Mostrar el resumen de la compra
    echo "<p>Resumen de la Compra:</p>";
    echo "<p>Nombre del Producto: $nombre</p>";
    echo "<p>Cantidad: $cantidad (Es $esPar)</p>";
    echo "<p>Precio por Unidad: $precioUnidad €</p>";
    echo "<p>Total Sin Descuento: $total €</p>";
    echo "<p>Descuento Aplicado: $descuento%</p>";
    echo "<p>Total con Primer Descuento: $totalConDescuento €</p>";
    echo "<p>IVA (15%): $iva €</p>";
    echo "<p>Total con Impuestos: $totalConImpuestos €</p>";
    echo "<p>Precio Promedio por Unidad: $precioPromedio €</p>";
    echo "<p>Promoción Especial: $promocionEspecial</p>";
    ?>
</body>
</html>
