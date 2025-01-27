<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Crea un programa que genere una contraseña aleatoria de 8 caracteres, 
     que incluya:

    Letras mayúsculas.
    Letras minúsculas.
    Números.

Requerimientos:

    Usa arrays o cadenas para definir los caracteres posibles.
    Usa rand() o array_rand() para seleccionar los caracteres. -->
    <h1>Generador de Contraseñas Aleatorias</h1>
    <?php
        // Función para generar una contraseña aleatoria
        function generarContrasena($longitud = 8) {
            // Definir caracteres posibles
            $mayusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $minusculas = 'abcdefghijklmnopqrstuvwxyz';
            $numeros = '0123456789';

            // Unir todos los caracteres posibles
            $todos = $mayusculas . $minusculas . $numeros;

            // Inicializar la contraseña
            $contrasena = '';

            // Generar la contraseña
            for ($i = 0; $i < $longitud; $i++) {
                // Elegir un índice aleatorio de la cadena de caracteres
                $indiceAleatorio = rand(0, strlen($todos) - 1);
                $contrasena .= $todos[$indiceAleatorio];
            }

            return $contrasena;
        }

        // Generar una contraseña de 8 caracteres
        $contrasenaGenerada = generarContrasena();
        echo "<p>Tu contraseña aleatoria es: <strong>$contrasenaGenerada</strong></p>";
    ?>

    <!-- Botón para generar una nueva contraseña -->
    <button onclick="window.location.reload();">Generar nueva contraseña</button>
</body>
</html>