<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    echo '<h2>Carrito</h2>';

    foreach ($_SESSION['carrito'] as $item) {
        echo '<li>' . $item['producto'] . ' (' . $item['precio'] . ')</li>';
    }

    if (isset($_POST['comprar'])) {
        session_destroy();
        echo 'Gracias por su compra!';
    } else {
        ?>
        <form action="" method="post">
            <input type="submit" name="comprar" value="Realizar compra">
        </form>
        <?php
    }
    ?>
</body>

</html>