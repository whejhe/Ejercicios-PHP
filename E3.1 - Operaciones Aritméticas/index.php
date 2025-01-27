<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="containerTitle">
        <h1>Operaciones Aritméticas</h1>
    </div>
    <div class="container">
        <!-- Ejercicio 1: Cálculo de área y perímetro de un rectángulo
Escribe un script que calcule el área y el perímetro de un rectángulo dados el ancho y el alto. -->
    <?php
        echo "<h2>Ejercicio 1</h2>";
        echo "<P>Cálculo de área y perímetro de un rectángulo
        Escribe un script que calcule el área y el perímetro de un rectángulo dados el ancho y el alto.</P>";
        $ancho = 5;
        $alto = 10;
        $area = $ancho * $alto;
        $perimetro = 2 * ($ancho + $alto);
        echo "Área: $area<br>";
        echo "Perímetro: $perimetro<br>";
    ?>
    <!-- Ejercicio 2: Calcular el resto y cociente de dos números
Dado dos números enteros, calcula el cociente y el resto de la división. -->
    <?php
        echo "<h2>Ejercicio 2</h2>";
        echo "<p>Calcular el resto y cociente de dos números
        Dado dos números enteros, calcula el cociente y el resto de la división.</P>";
        $num1 = 15;
        $num2 = 4;
        $cociente = intdiv($num1, $num2);
        $resto = $num1 % $num2;
        echo "Cociente: $cociente<br>";
        echo "Resto: $resto<br>";
    ?>
    <!-- Ejercicio 3: Pre-incremento y post-incremento
Crea un script que muestre la diferencia entre el pre-incremento y el post-incremento. -->
    <?php
        echo "<h2>Ejercicio 3</h2>";
        echo "<p>Crea un script que muestre la diferencia entre el pre-incremento y el post-incremento.</p>";
        $numero = 5;
        echo "Pre-incremento: " . (++$numero) . "<br>";
        echo "Post-incremento: " . ($numero++) . "<br>";
        echo "Valor después del post-incremento: $numero<br>";
    ?>
    <!-- Ejercicio 4: Redondeo de un número
Utiliza la función round() para redondear un número a 2 decimales. -->
    <?php
        echo "<h2>Ejercicio 4</h2>";
        echo "<p>Redondeo de un número. Utiliza la función round() para redondear un número a 2 decimales.</p>";
        $numRedondeo = 3.14159;
        $numFormateado = number_format($numRedondeo, 2, ',', '.');
        echo "Número redondeado a 2 decimales: $numFormateado<br>";
    ?>
    <!-- Ejercicio 5: Calcular potencias
Escribe un script que calcule y muestre el valor de 3 elevado a la 4ta potencia usando el operador **. -->
    <?php
        echo "<h2>Ejercicio 5</h2>";
        echo "<p>Calcular potencias
        Escribe un script que calcule y muestre el valor de 3 elevado a la 4ta potencia usando el operador **.</p>";
        $base = 3;
        $exponente = 4;
        $potencia = $base ** $exponente;
        echo "3 elevado a la 4ta potencia es: $potencia<br>";
    ?>
    <!-- Ejercicio 6: Número aleatorio Genera un número aleatorio entre 1 y 50 usando mt_rand(). -->
    <?php
        echo "<h2>Ejercicio 6</h2>";
        echo "<p>Genera un número aleatorio entre 1 y 50 usando mt_rand().</p>";
        $numeroAleatorio = mt_rand(1, 50);
        echo "Número aleatorio entre 1 y 50: $numeroAleatorio<br>";
    ?>
    <!-- Ejercicio 7: Conversión de tipos con operadores de comparación
Compara un número entero con una cadena de texto usando === y == para mostrar la diferencia. -->
    <?php
        echo "<h2>Ejercicio 7</h2>";
        echo "<p>Conversión de tipos con operadores de comparación
        Compara un número entero con una cadena de texto usando === y == para mostrar la diferencia.</p>";
        $entero = 5;
        $cadena = "5";
        echo "Comparación == : " . ($entero == $cadena ? 'Verdadero' : 'Falso') . "<br>";
        echo "Comparación === : " . ($entero === $cadena ? 'Verdadero' : 'Falso') . "<br>";
    ?>
    <!-- Ejercicio 8: Formatear un número con separador de miles y
decimales Usa number_format() para mostrar un número con separador de miles y 3 decimales. -->
    <?php
    echo "<h2>Ejercicio 8</h2>";
    echo "<p>Formatear un número con separador de miles y
    decimales Usa number_format() para mostrar un número con separador de miles y 3 decimales.</p>";
    $numeroGrande = 1234567.8910;
    echo "Número formateado: " . number_format($numeroGrande, 3, ',', '.') . "<br>";
    ?>
    <!-- Ejercicio 9: Evaluar expresiones con operadores lógicos
Usa operadores lógicos para determinar si un número está entre 10 y 20. -->
    <?php
        echo "<h2>Ejercicio 9</h2>";
        echo "<p>Evaluar expresiones con operadores lógicos
        Usa operadores lógicos para determinar si un número está entre 10 y 20.</p>";
        
        $numeroEvaluar = 15;
        echo "¿El número está entre 10 y 20? ";
    
        if ($numeroEvaluar >= 10 && $numeroEvaluar <= 20) {
            echo "Sí<br>";
        } else {
            echo "No<br>";
        }
?>
    <!-- Ejercicio 10: Incremento de caracteres
Muestra cómo se comporta el incremento en caracteres con el operador ++ -->
    <?php
        echo "<h2>Ejercicio 10</h2>";
        echo "<p>Incremento de caracteres
        Muestra qué se comporta el incremento en caracteres con el operador ++</p>";
        $caracter = 'A';
        echo "Carácter original: $caracter<br>";
        $caracter++;
        echo "Carácter después de incremento: $caracter<br>";
    ?>
    </div>
</body>

</html>