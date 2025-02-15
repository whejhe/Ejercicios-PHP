<?php
session_start();

if (!isset($_POST['pelicula'])) {
    header("Location: index.php");
    exit;
}

$_SESSION['pelicula'] = $_POST['pelicula'];

$horarios = [
    "Hijos de los Hombres" => ["10:00", "14:00", "18:00"],
    "Deseando Amar" => ["11:00", "15:00", "19:00"],
    "The Rocky Horror Picture Show" => ["12:00", "16:00", "20:00"]
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Horarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Horarios para <?php echo htmlspecialchars($_SESSION['pelicula']); ?></h1>
    <form action="seleccion_asientos.php" method="POST">
        <p>Selecciona un horario:</p>
        <?php foreach ($horarios[$_SESSION['pelicula']] as $horario): ?>
            <label><input type="radio" name="sesion" value="<?php echo htmlspecialchars($horario); ?>"> <?php echo htmlspecialchars($horario); ?></label><br>
        <?php endforeach; ?>
        <button type="submit">Seleccionar Asientos</button>
    </form>
</body>
</html>