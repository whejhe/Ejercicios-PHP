<?php
session_start();

if (!isset($_POST['sesion']) || !isset($_SESSION['pelicula'])) {
    header("Location: index.php");
    exit;
}

$_SESSION['sesion'] = $_POST['sesion'];
$_SESSION['timeout'] = time() + 60;

// Generar matriz de asientos (5 filas x 6 columnas)
$asientos = [];
for ($i = 1; $i <= 5; $i++) {
    for ($j = 1; $j <= 6; $j++) {
        $asientos["$i-$j"] = "disponible";
    }
}

// Simulación de asientos ocupados
$asientos["1-2"] = "ocupado";
$asientos["3-4"] = "ocupado";

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
    <title>Seleccionar Asientos</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Selecciona tus asientos para <?php echo htmlspecialchars($_SESSION['pelicula']); ?></h1>
    <img src="<?php echo htmlspecialchars($pelicula_actual['imagen']); ?>" alt="<?php echo htmlspecialchars($_SESSION['pelicula']); ?>" style="max-width: 200px;">
    <p><?php echo nl2br(htmlspecialchars($pelicula_actual['sinopsis'])); ?></p>
    <form action="pago.php" method="POST">
        <table border="1">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <tr>
                    <?php for ($j = 1; $j <= 6; $j++): ?>
                        <td>
                            <?php if ($asientos["$i-$j"] == "disponible"): ?>
                                <label><input type="checkbox" name="asientos[]" value="<?php echo "$i-$j"; ?>"> <?php echo "$i-$j"; ?></label>
                            <?php else: ?>
                                <span style="color:red;"><?php echo "$i-$j"; ?> (Ocupado)</span>
                            <?php endif; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
        <button type="submit">Pagar</button>
    </form>
</body>
</html>