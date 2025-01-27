<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_POST['matriz']) && isset($_POST['fila']) && isset($_POST['columna']) && isset($_POST['direccion'])) {
        $matriz = $_POST['matriz'];
        $fila = (int)$_POST['fila'] - 1;
        $columna = (int)$_POST['columna'] - 1;
        $direccion = $_POST['direccion'];

        $tamano_matriz = count($matriz);
        $resultado = [];

        switch ($direccion) {
            case 'arriba':
                for ($i = $fila; $i >= 0; $i--) {
                    $resultado[] = $matriz[$i][$columna];
                }
                break;
            case 'abajo':
                for ($i = $fila; $i < $tamano_matriz; $i++) {
                    $resultado[] = $matriz[$i][$columna];
                }
                break;
            case 'izquierda':
                for ($j = $columna; $j >= 0; $j--) {
                    $resultado[] = $matriz[$fila][$j];
                }
                break;
            case 'derecha':
                for ($j = $columna; $j < $tamano_matriz; $j++) {
                    $resultado[] = $matriz[$fila][$j];
                }
                break;
            case 'arriba_izquierda':
                for ($i = $fila, $j = $columna; $i >= 0 && $j >= 0; $i--, $j--) {
                    $resultado[] = $matriz[$i][$j];
                }
                break;
            case 'arriba_derecha':
                for ($i = $fila, $j = $columna; $i >= 0 && $j < $tamano_matriz; $i--, $j++) {
                    $resultado[] = $matriz[$i][$j];
                }
                break;
            case 'abajo_izquierda':
                for ($i = $fila, $j = $columna; $i < $tamano_matriz && $j >= 0; $i++, $j--) {
                    $resultado[] = $matriz[$i][$j];
                }
                break;
            case 'abajo_derecha':
                for ($i = $fila, $j = $columna; $i < $tamano_matriz && $j < $tamano_matriz; $i++, $j++) {
                    $resultado[] = $matriz[$i][$j];
                }
                break;
        }

        echo "<h1>Los valores de la matriz partiendo de la posición (" . ($fila + 1) . ", " . ($columna + 1) . ") y con la trayectoria seleccionada son:</h1>";
        echo implode(" ", $resultado) . "<br>";
    } else {
        echo "<p>No se recibieron datos.</p>";
    }
    echo "<a href='matriz1.php'>Volver al inicio</a>";
    ?>
</body>

</html>