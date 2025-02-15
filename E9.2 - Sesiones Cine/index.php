<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cine Particular</title>
    <link rel="stylesheet" href="styles.css">
    <!-- <style>
        .movie-card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            text-align: center;
        }
        .movie-card img {
            max-width: 150px;
            height: auto;
        }
    </style> -->
</head>
<body>
    <h1>Bienvenido al Cine Particular</h1>

    <?php
    $peliculas = [
        "Hijos de los Hombres" => [
            "sinopsis" => "Año 2027: el ser humano está al borde de la extinción: los hombres han perdido la capacidad de procrear y se ignora por qué razon todas las mujeres del planeta se han vuelto estériles. Al mismo tiempo, el mundo se estremece cuando muere un muchacho de 18 años, la persona más joven de la Tierra. Se vive, pues, una situación de caos galopante. En tales circunstancias, Theo (Clive Owen), un desilusionado ex-activista radical de Londres convertido en burócrata, es contratado por Julian (Julianne Moore) para que proteja a una mujer que puede tener el secreto de la salvación de la humanidad, la persona más valiosa de la Tierra... ",
            "imagen" => "img/Hijos de los Hombres.png"
        ],
        "Deseando Amar" => [
            "sinopsis" => "Hong Kong, 1962. Chow, redactor jefe de un diario local, se muda con su mujer a un edificio habitado principalmente por residentes de Shanghai. Allí conoce a Li-zhen, una joven que acaba de instalarse en el mismo edificio con su esposo. Ella es secretaria de una empresa de exportación y su marido está continuamente de viaje de negocios. Como la mujer de Chow también está casi siempre fuera de casa, Li-zhen y Chow pasan cada vez más tiempo juntos y se hacen muy amigos. Un día, ambos descubrirán algo inesperado sobre sus respectivos cónyuges. ",
            "imagen" => "img/Deseando Amar.png"
        ],
        "The Rocky Horror Picture Show" => [
            "sinopsis" => "Cuando una pareja regresa de la boda de unos amigos, estalla una violenta tormenta y el coche se les avería. Así las cosas, no tienen más remedio que refugiarse en un castillo, donde el doctor Frank-N-Furter vive entregado a la fabricación de una especie de Frankenstein.",
            "imagen" => "img/The Rocky Horror Picture Show.png"
        ]
    ];
    ?>

    <form action="seleccion_pelicula.php" method="POST">
        <?php foreach ($peliculas as $nombre => $info): ?>
            <div class="movie-card">
                <h2><?php echo htmlspecialchars($nombre); ?></h2>
                <div class="movie-info">
                <img src="<?php echo htmlspecialchars($info['imagen']); ?>" alt="<?php echo htmlspecialchars($nombre); ?>">
                <div class="movie-description">
                <p><?php echo nl2br(htmlspecialchars($info['sinopsis'])); ?></p>
                <label><input type="radio" name="pelicula" value="<?php echo htmlspecialchars($nombre); ?>"> Seleccionar</label>
                </div>
                </div>
            </div>
        <?php endforeach; ?>
        <button type="submit">Ver Horarios</button>
    </form>
</body>
</html>