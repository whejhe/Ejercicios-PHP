<?php
session_start();

if (!isset($_POST['asientos']) || !isset($_SESSION['pelicula']) || !isset($_SESSION['sesion'])) {
    header("Location: index.php");
    exit;
}

$_SESSION['asientos'] = $_POST['asientos'];

if (time() > $_SESSION['timeout']) {
    echo "<script>alert('Tiempo de pago expirado');</script>";
    session_destroy();
    header("Refresh:0; url=index.php");
    exit;
}

$total = count($_SESSION['asientos']) * 10;

$peliculas = [
    "Hijos de los Hombres" => [
        "sinopsis" => "En un futuro distópico donde la humanidad enfrenta la esterilidad total, Theo Faron se convierte en protector de un milagroso embarazo que podría salvar la especie.",
        "imagen" => "https://example.com/hijos_de_los_hombres.jpg"
    ],
    "Deseando Amar" => [
        "sinopsis" => "Una historia romántica sobre dos personas que luchan contra sus miedos y prejuicios para encontrar el amor verdadero.",
        "imagen" => "https://example.com/deseando_amar.jpg"
    ],
    "The Rocky Horror Picture Show" => [
        "sinopsis" => "Una comedia musical icónica que sigue a una pareja que se encuentra con un extravagante científico transsexual y su criatura.",
        "imagen" => "https://example.com/rocky_horror.jpg"
    ]
];

$pelicula_actual = $peliculas[$_SESSION['pelicula']];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pago</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Resumen de compra</h1>
    <img src="<?php echo htmlspecialchars($pelicula_actual['imagen']); ?>" alt="<?php echo htmlspecialchars($_SESSION['pelicula']); ?>" style="max-width: 200px;">
    <p><?php echo nl2br(htmlspecialchars($pelicula_actual['sinopsis'])); ?></p>
    <p>Película: <?php echo htmlspecialchars($_SESSION['pelicula']); ?></p>
    <p>Sesión: <?php echo htmlspecialchars($_SESSION['sesion']); ?></p>
    <p>Asientos seleccionados: <?php echo implode(", ", $_SESSION['asientos']); ?></p>
    <p>Total: <?php echo $total; ?>€</p>
    <form action="descargar_entradasPDF.php" method="POST">
        <button type="submit">Descargar Entradas</button>
    </form>
</body>
</html>