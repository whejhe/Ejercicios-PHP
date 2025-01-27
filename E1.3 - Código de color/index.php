<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Color RGB Aleatorio</title>
</head>
<body>
    <h1>Código de Color RGB Aleatorio</h1>
    <div class="container">
        <p>
            <?php
            function generarColorRGB() {
                $rojo = rand(0, 255);   
                $verde = rand(0, 255);  
                $azul = rand(0, 255); 

                return "rgb($rojo, $verde, $azul)";
            }

            echo "El código generado es: <strong>" . generarColorRGB() . "</strong>";
            ?>
        </p>
        <!-- Añadir el codigo generado -->
        <div class="color" style="background-color: <?php echo generarColorRGB(); ?>;">

        </div>
        <button onclick="location.reload()">Refrescar</button>
    </div>
    
</body>
</html>
