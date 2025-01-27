<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=1.0">
    <title>Ejercicios</title>
</head>

<body>
    <div class="containerTitle">
        <?php
        echo "<h1>EJERCICIOS BASICOS PHP</h1>";
        ?>
    </div>
    <div class="container">
        <!-- 1. Tipos de Datos:
    Ejercicio: Crea un script en PHP que declare y muestre diferentes tipos de datos: enteros, flotantes, cadenas y booleanos.-->
        <?php
        echo "<h2>Ejercicio 1</h2>";
        echo "<h3>Tipos de Datos:</br>
    Crea un script en PHP que declare y muestre diferentes tipos de datos: enteros, flotantes, cadenas y booleanos.</h3>";
        $entero = 10;
        $flotante = 10.53492082743894;
        $cadena = "Hola";
        $booleano = true;

        echo "<p>Entero: $entero</p>";
        echo "<p>Flotante: $flotante</p>";
        echo "<p>Cadena: $cadena</p>";
        echo "<p>Booleano:: $booleano</p>";
        ?>

        <!-- 2. Cadenas: Declara una cadena y realiza operaciones básicas como obtener su longitud, convertirla a mayúsculas y concatenarla con otra cadena.-->
        <?php
        echo "<h2>Ejercicio 2</h2>";
        echo "<h3>Cadenas: </br> Declara una cadena y realiza operaciones básicas como obtener su longitud, convertirla a mayúsculas y concatenarla con otra cadena.</h3>";
        $cadena = "Hola que tal";
        $longitud = strlen($cadena);
        $mayusculas = strtoupper($cadena);
        $concatenada = $cadena . " " . $mayusculas;


        echo "<p>$cadena</p>";
        echo "<p>$longitud</p>";
        echo "<p>$mayusculas</p>";
        echo "<p>$concatenada</p>";
        ?>

        <!-- 3. Comillas dentro de cadenas:
    Ejercicio: Crea una cadena en la que incluyas comillas simples y dobles.-->
        <?php
        echo "<h2>Ejercicio 3</h2>";
        echo "<h3>Comillas dentro de cadenas: </br>
    Crea una cadena en la que incluyas comillas simples y dobles.</h3>";
        $cadena = '"Hola que tal"';
        echo "<p>$cadena</p>";
        ?>

        <!-- 4. Diferencias entre comillas simples y dobles:
    Escribe dos cadenas, una con comillas simples y otra con comillas dobles, que incluyan una variable. Observa la diferencia.-->
        <?php
        echo "<h2>Ejercicio 4</h2>";
        echo "<h3>Diferencias entre comillas simples y dobles: </br>
    Escribe dos cadenas, una con comillas simples y otra con comillas dobles, que incluyan una variable. Observa la diferencia.</h3>";
        $variable = "A los buenos Dias";

        echo "<p>Dobles: $variable</p>";
        echo '<p>Simples: $variable</p>';
        ?>

        <!-- 5. Comillas en código HTML / CSS:
    Crea una cadena que incluya código HTML y CSS, utilizando comillas correctamente-->
        <?php
        echo "<h2>Ejercicio 5</h2>";
        echo "<h3>Comillas en código HTML / CSS: </br>
    Crea una cadena que incluya código HTML y CSS, utilizando comillas correctamente</h3>";

        $cadena = "<p style='
    color: whitesmoke; 
    font-size: 24px; 
    font-weight: bold;
    background-color: black;
    '>Hola que tal</p>";
        echo $cadena;
        ?>

        <!-- 6. Caracteres especiales:
    Usa caracteres especiales como saltos de línea, tabulaciones o barras invertidas dentro de una cadena.-->
        <?php
        echo "<h2>Ejercicio 6</h2>";
        echo "<h3>Caracteres especiales: </br>
    Usa caracteres especiales como saltos de línea, tabulaciones o barras invertidas dentro de una cadena.</h3>";

        $cadena1 = "Hola \n";
        $cadena2 = "que tal";

        echo "<p>$cadena1</p>" . "<p>$cadena2</p>";

        ?>
        <!-- 7. Concatenar cadenas:
    Concatenar dos cadenas y mostrar el resultado. -->
        <?php
        echo "<h2>Ejercicio 7</h2>";
        echo "<h3>Concatenar cadenas: </br>
    Concatenar dos cadenas y mostrar el resultado.</h3>";
        $cadena1 = "Hola";
        $cadena2 = "que tal";

        echo "<p>$cadena1 $cadena2</p>";
        ?>

        <!-- 8. Añadiendo saltos de línea:
    Modifica el script anterior para que el texto concatenado se muestre en líneas separadas. -->
        <?php
        echo "<h2>Ejercicio 8</h2>";
        echo "<h3>Añadiendo saltos de línea: </br>
    Modifica el script anterior para que el texto concatenado se muestre en líneas separadas.</h3>";

        $cadena1 = "Hola";
        $cadena2 = "que tal";

        echo "<p>$cadena1</p>" . "<p>$cadena2</p>";
        ?>

        <!-- 9. Variables:
    Declara una variable y asígnale un valor. Luego, imprímela en pantalla. -->
        <?php
        echo "<h2>Ejercicio 9</h2>";
        echo "<h3>Variables: </br>
    Declara una variable y asígnale un valor. Luego, imprimirla en pantalla.</h3>";
        $variable = 10;
        echo "<p>$variable</p>";
        ?>

        <!-- 10. Usar variables:
    Usa varias variables en un cálculo simple y muestra el resultado. -->
        <?php
        echo "<h2>Ejercicio 10</h2>";
        echo "<h3>Usar variables: </br>
    Usa varias variables en un cálculo simple y muestra el resultado.</h3>";

        $num1 = 2;
        $num2 = 3;
        $suma = $num1 + $num2;

        echo "<p>$num1 + $num2 = $suma</p>";
        ?>

        <!-- 11. Concatenar variables y cadenas:
    Concatenar una variable y una cadena en una sola línea de texto. -->
        <?php
        echo "<h2>Ejercicio 11</h2>";
        echo "<h3>Concatenar variables y cadenas: </br>
    Concatenar una variable y una cadena en una sola línea de texto.</h3>";

        $v1 = "Variable 1";
        $v2 = "Variable 2";

        echo "<span>$v1</span>" . "<span> Cadena de texto </span>" . "<span>$v2</span>";
        ?>

        <!-- 12. Variables en cadenas:
    Incluye una variable dentro de una cadena usando comillas dobles. -->
        <?php
        echo "<h2>Ejercicio 12</h2>";
        echo "<h3>Variables en cadenas: </br>
    Incluye una variable dentro de una cadena usando comillas dobles.</h3>";

        $v1 = "Variable 1";

        echo "<p>$v1</p>";
        ?>

        <!-- 13. Tipos de variables:
    Declara variables de diferentes tipos (entero, flotante, booleano) y muéstralas. -->
        <?php
        echo "<h2>Ejercicio 13</h2>";
        echo "<h3>Tipos de variables: </br>
    Declara variables de diferentes tipos (entero, flotante, booleano) y muéstralas.</h3>";
            $entero = 10;
            $flotante = 10.5;
            $booleano = true;
            echo "<p>$entero</p>";
            echo "<p>$flotante</p>";
            echo "<p>$booleano</p>";
        ?>

        <!-- 14. Operaciones aritméticas:
    Realiza operaciones aritméticas básicas (suma, resta, multiplicación, división). -->
        <?php
        echo "<h2>Ejercicio 14</h2>";
        echo "<h3>Operaciones aritméticas: </br>
    Realiza operaciones aritméticas básicas (suma, resta, multiplicación, división).</h3>";
            $num1 = 2;
            $num2 = 4;
            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multi = $num1 * $num2;
            $div = $num1 / $num2;

            echo "<p>$num1 + $num2 = $suma</p>";
            echo "<p>$num1 - $num2 = $resta</p>";
            echo "<p>$num1 * $num2 = $multi</p>";
            echo "<p>$num1 / $num2 = $div</p>";
        ?>

        <!-- 15. Nombres de variables:
    Declara variables con nombres significativos y utiliza buenas prácticas para nombrarlas. -->
        <?php
        echo "<h2>Ejercicio 15</h2>";
        echo "<h3>Nombres de variables: </br>
    Declara variables con nombres significativos y utiliza buenas prácticas para nombrarlas.</h3>";

        $nombre = "Carlos";
        $apellido = "Fernández";
        $nombreCompleto = $nombre . " " . $apellido;
        echo "<p>$nombreCompleto</p>";    
        ?>


        <!-- 16. Unir variables y texto:
    Une variables y texto dentro de un echo. -->
        <?php
        echo "<h2>Ejercicio 16</h2>";
        echo "<h3>Unir variables y texto: </br>
    Une variables y texto dentro de un echo.</h3>";

        $nombre = "Alumno x";
        echo "<p>Hola $nombre</p>";
        ?>

        <!-- 17. Variables lógicas (boolean):
    Declara una variable booleana y usa un if para mostrar un mensaje dependiendo de su valor. -->
        <?php
        echo "<h2>Ejercicio 17</h2>";
        echo "<h3>Variables lógicas (boolean): </br>
    Declara una variable booleana y usa un if para mostrar un mensaje dependiendo de su valor.</h3>";
            $trabajando = false;
            if($trabajando){
                echo "<p>Estoy trabajando</p>";
            }else{
                echo "<p>No estoy trabajando</p>";
            }
        ?>

        <!-- 18. Variables enteras (integer):
    Declara una variable entera y úsala en una operación. -->
        <?php
        echo "<h2>Ejercicio 18</h2>";
        echo "<h3>Variables enteras (integer): </br>
    Declara una variable entera y úsala en una operación.</h3>";

        $numEntero = 10;
        $numDiv = $numEntero / 2;
        echo "<p>$numEntero / 2 = $numDiv</p>";
        ?>

        <!-- 19. Notación complemento a dos:
    Realiza una operación binaria y muestra el resultado. -->
        <?php
        echo "<h2>Ejercicio 19</h2>";
        echo "<h3>Notación complemento a dos: </br>
    Realiza una operación binaria y muestra el resultado.</h3>";

        
        ?>

        <!-- 20. Variables decimales (float):
    Usa una variable de tipo flotante y realiza una operación con ella. -->
        <?php
        echo "<h2>Ejercicio 20</h2>";
        echo "<h3>Variables decimales (float): </br>
    Usa una variable de tipo flotante y realiza una operación con ella.</h3>";
            
            $numDecimal = 10.23672378;
            $numDiv = $numDecimal / 2;
            echo "<p>$numDecimal / 2 = $numDiv</p>";
        ?>

        <!-- 21. Variables de cadenas (string):
    Declara una variable de cadena y manipúlala (mayúsculas, minúsculas). -->
        <?php
        echo "<h2>Ejercicio 21</h2>";
        echo "<h3>Variables de cadenas (string): </br>
    Declara una variable de cadena y manipúlala (mayúsculas, minúsculas).</h3>";

        $nombre = "Carlos";
        $apellidos = "Fernández";
        $nombreCompleto = $nombre . " " . $apellidos;
        echo "<p>Mayúsculas: " . strtoupper($nombreCompleto) . "</p>";
        echo "<p>Minúsculas: " . strtolower($nombreCompleto) . "</p>";
        ?>

        <!-- 22. Conversiones de tipos:
    Convierte un número en una cadena y una cadena en un número. -->
        <?php
        echo "<h2>Ejercicio 22</h2>";
        echo "<h3>Conversiones de tipos: </br>
    Convierte un número en una cadena y una cadena en un número.</h3>";

        $numEntero = 10;
        $cadena = strval($numEntero);

        $numEntero = strval($cadena);

        echo "<p>Entero: $numEntero</p>";
        echo "<p>Cadena: $cadena</p>";
        ?>

        <!-- 23. Conversión Explícita:
    Convierte explícitamente una variable flotante en entera. -->
        <?php
        echo "<h2>Ejercicio 23</h2>";
        echo "<h3>Conversión Explícita: </br>
    Convierte explícitamente una variable flotante en entera.</h3>";
            
            $numFlotante = 10.23672378;

            $nunEntero = intval($numFlotante);
            echo "<p>Entero: $nunEntero</p>";
        ?>

        <!-- 24. Conversión Automática:
    Realiza una operación entre diferentes tipos de datos (flotante y entero) y observa la conversión automática. -->
        <?php
        echo "<h2>Ejercicio 24</h2>";
        echo "<h3>Conversión Automática: </br>
    Realiza una operación entre diferentes tipos de datos (flotante y entero) y observa la conversión automática.</h3>";

        $numFlotante = 10.23672378;
        $numEntero = 10;
        $suma = $numEntero + $numFlotante;
        echo "<p>$numEntero + $numFlotante = $suma</p>";
        ?>

        <!-- 25. Variables como variables lógicas:
    Usa una variable como condicional lógica. -->
        <?php
        echo "<h2>Ejercicio 25</h2>";
        echo "<h3>Variables como variables lógicas: </br>
    Usa una variable como condicional lógica.</h3>";

        $trabajando = false;
        if($trabajando){
            echo "<p>Estoy trabajando</p>";
        }else{
            echo "<p>No estoy trabajando</p>";
        }
        ?>
    </div>
</body>

</html>