<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <?php
    $cursos = [
        [
            "nombre" => "Desarrollo Web",
            "duracion_horas" => 40,
            "estudiantes" => 25,
            "modulos" => ["HTML", "CSS", "JavaScript", "React"]
        ],
        [
            "nombre" => "Bases de Datos",
            "duracion_horas" => 35,
            "estudiantes" => 18,
            "modulos" => ["SQL Básico", "SQL Avanzado", "Optimización"]
        ],
        [
            "nombre" => "Inteligencia Artificial",
            "duracion_horas" => 50,
            "estudiantes" => 30,
            "modulos" => ["Python", "Aprendizaje Supervisado", "Redes Neuronales"]
        ],
        [
            "nombre" => "Ciberseguridad",
            "duracion_horas" => 45,
            "estudiantes" => 20,
            "modulos" => ["Conceptos Básicos", "Análisis de Vulnerabilidades", "Pentesting"]
        ]
    ];
    ?>
    <div class="container">
        <h1>Ejercicio 1</h1>
        <h3>Nombres y duración de todos los cursos</h3>
        <?php
        foreach ($cursos as $curso) {
            echo "Curso: " . $curso["nombre"] . " - Duración: " . $curso["duracion_horas"] . " horas<br>";
        }
        ?>
    </div>

    <div class="container">
        <h1>Ejercicio 2</h1>
        <h3>Total de horas de todos los cursos</h3>
        <?php
        $totalHoras = 0;
        foreach ($cursos as $curso) {
            $totalHoras += $curso["duracion_horas"];
        }
        echo "El total de horas de todos los cursos es: " . $totalHoras . " horas.";
        ?>
    </div>

    <div class="container">
        <h1>Ejercicio 3</h1>
        <h3>Cursos con más de 20 estudiantes</h3>
        <?php
        foreach ($cursos as $curso) {
            if ($curso["estudiantes"] > 20) {
                echo "Curso: " . $curso["nombre"] . " - Estudiantes: " . $curso["estudiantes"] . "<br>";
            }
        }
        ?>
    </div>

    <div class="container">
        <h1>Ejercicio 4</h1>
        <h3>Módulos del curso "Desarrollo Web"</h3>
        <?php
        foreach ($cursos as $curso) {
            if ($curso["nombre"] === "Desarrollo Web") {
                echo "Módulos del curso " . $curso["nombre"] . ":<br>";
                foreach ($curso["modulos"] as $modulo) {
                    echo "- " . $modulo . "<br>";
                }
            }
        }
        ?>
    </div>

    <div class="container">
        <h1>Ejercicio 5</h1>
        <h3>Curso con mayor duración</h3>
        <?php
        $cursoMayorDuracion = "";
        $duracionMax = 0;

        foreach ($cursos as $curso) {
            if ($curso["duracion_horas"] > $duracionMax) {
                $duracionMax = $curso["duracion_horas"];
                $cursoMayorDuracion = $curso["nombre"];
            }
        }

        echo "El curso con mayor duración es: " . $cursoMayorDuracion . " con " . $duracionMax . " horas.";
        ?>
    </div>

    <div class="container">
        <h1>Ejercicio 6</h1>
        <h3>Reporte Tabular</h3>
        <table border="1" cellspacing="0" cellpadding="5">
            <tr>
                <th>Nombre del Curso</th>
                <th>Estudiantes</th>
                <th>Duración (horas)</th>
            </tr>
            <?php
            foreach ($cursos as $curso) {
                echo "<tr>";
                echo "<td>" . $curso["nombre"] . "</td>";
                echo "<td>" . $curso["estudiantes"] . "</td>";
                echo "<td>" . $curso["duracion_horas"] . "</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>

    <div class="container">
        <h1>Ejercicio 7</h1>
        <h3>Promedio de estudiantes por curso</h3>
        <?php
        $totalEstudiantes = 0;
        $totalCursos = count($cursos);

        foreach ($cursos as $curso) {
            $totalEstudiantes += $curso["estudiantes"];
        }

        $promedioEstudiantes = $totalCursos > 0 ? $totalEstudiantes / $totalCursos : 0;

        echo "El promedio de estudiantes por curso es: " . number_format($promedioEstudiantes, 2);
        ?>
    </div>

</body>

</html>