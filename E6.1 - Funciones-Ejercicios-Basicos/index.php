<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- Ejercicio 1
        Crear una función en PHP que reciba como parámetros la altura (h) de un
        cilindro y el radio de la base (r), y que nos devuelva el volumen del cilindro.
        La fórmula del volumen es: V=л2 * r2 * h

        Ejercicio 2
        Crea 2 funciones PHP que, dado 3 números, una función los sume y la otra
        haga el producto de los 3 números.
        
        Ejercicio3 - Función Eliminar Número
        Crea una función con la sintaxis moderna que
        ● Reciba un array de números.
        ● Un número de elementos a eliminar de dicho array, por defecto uno.
        ● Se elimina del array el número de elementos recibidos de forma
        aleatoria dentro del array.
        ● Devuelve un booleano indicando si la acción se realizó correctamente
        o no.
        
        NOTA: El array que se pasa a la función queda modificado después de
        llamar a la misma. -->
    <?php
    echo "<h1>Ejercicio 1</h1>";
    function volumenCilindr($altura, $radio)
    {
        return pi() * pow($radio, 2) * $altura;
    }

    $volumen = volumenCilindr(10, 5);

    print("Volumen: " . $volumen);
    ?>

    <?php
    echo "<h1>Ejercicio 2</h1>";
    function suma($num1, $num2, $num3)
    {
        return $num1 + $num2 + $num3;
    }

    function producto($num1, $num2, $num3)
    {
        return $num1 * $num2 * $num3;
    }

    $sumaNumeros = suma(5, 5, 5);
    print("Suma:" . $sumaNumeros);
    print("<br>");
    $multi = producto(5, 5, 5);
    print("Producto:" . $multi);
    ?>

    <?php

    echo "<h1>Ejercicio 3</h1>";
    function eliminarNumero(array &$numeros, $numAEliminar = 1)
    {
        $numeroAEliminar = array_rand($numeros, $numAEliminar);
        if (is_array($numeroAEliminar)) {
            foreach ($numeroAEliminar as $numero) {
                unset($numeros[$numero]);
            }
        } else {
            unset($numeros[$numeroAEliminar]);
        }
        return true;
    }

    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    print(implode(", ", $numeros));
    eliminarNumero($numeros, 3);
    echo "<p>Eliminar Numero</p>";
    print(implode(", ", $numeros));

    ?>
</body>

</html>