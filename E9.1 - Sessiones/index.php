<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
    <script>
        function eliminarProducto(producto) {
            location.href = 'index.php?eliminar=' + producto;
        }
    </script>
</head>

<body>
    <?php
    session_start();

    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }

    if (isset($_GET['eliminar'])) {
        $producto = $_GET['eliminar'];
        foreach ($_SESSION['carrito'] as $key => $item) {
            if ($item['producto'] == $producto) {
                unset($_SESSION['carrito'][$key]);
            }
        }
    }

    $productos = array(
        array('nombre' => 'Producto 1', 'precio' => 10.99),
        array('nombre' => 'Producto 2', 'precio' => 5.99),
        array('nombre' => 'Producto 3', 'precio' => 7.99)
    );

    ?>

    <h1>Productos disponibles</h1>

    <ul>
        <?php foreach ($productos as $producto) { ?>
            <li>
                <a href="?agregar=<?php echo $producto['nombre']; ?>">
                    <?php echo $producto['nombre']; ?> (<?php echo $producto['precio']; ?>)
                </a>
            </li>
        <?php } ?>
    </ul>

    <?php
    if (isset($_GET['agregar'])) {
        $producto = $_GET['agregar'];
        $_SESSION['carrito'][] = array('producto' => $producto, 'precio' => 10.99);
    }

    echo '<h2>Carrito</h2>';
    echo '<ul>';
    foreach ($_SESSION['carrito'] as $item) {
        echo '<li>' . $item['producto'] . ' (' . $item['precio'] . ') <button onclick="eliminarProducto(\'' . $item['producto'] . '\')">Eliminar</button></li>';
    }
    echo '</ul>';

    ?>

    <form action="carrito.php">
        <input type="submit" value="Ir al carrito">
    </form>
</body>

</html>