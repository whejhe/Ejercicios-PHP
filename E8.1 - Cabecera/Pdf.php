<?php

require __DIR__ . '/vendor/autoload.php';

use Fpdf\Fpdf;

// Verificar si se han enviado los datos necesarios
if (
    isset($_POST['filename']) &&
    isset($_POST['contenido']) &&
    isset($_POST['tituloPDF'])
) {
    $filename = $_POST['filename']; // Nombre del archivo proporcionado por el usuario
    $contenido = $_POST['contenido']; // Contenido del PDF
    $tituloPDF = $_POST['tituloPDF']; // Título del PDF

    // Crear un objeto FPDF
    $pdf = new Fpdf();

    // Agregar una página
    $pdf->AddPage();

    // Establecer fuente y tamaño
    $pdf->SetFont('Arial', 'B', 16);

    // Convertir el título y el contenido a ISO-8859-1 (compatible con FPDF)
    $tituloPDF = utf8_decode($tituloPDF);
    $contenido = utf8_decode($contenido);

    // Agregar título al PDF
    $pdf->Cell(0, 10, $tituloPDF, 0, 1, 'C'); // Centro alineado
    $pdf->Ln(10); // Salto de línea

    // Cambiar fuente para el contenido
    $pdf->SetFont('Arial', '', 12);

    // Agregar contenido al PDF
    $pdf->MultiCell(0, 10, $contenido);

    // Agregar extensión .pdf al nombre del archivo si no está presente
    if (pathinfo($filename, PATHINFO_EXTENSION) !== 'pdf') {
        $filename .= '.pdf';
    }

    // Configurar las cabeceras HTTP para forzar la descarga del archivo
    header('Content-Type: application/pdf'); // Tipo MIME para PDF
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    // Generar y enviar el PDF al navegador
    $pdf->Output('D', $filename); // 'D' indica que el archivo se descargará
    exit(); // Terminar el script después de enviar el archivo
} else {
    echo "Faltan datos necesarios para generar el PDF.";
}