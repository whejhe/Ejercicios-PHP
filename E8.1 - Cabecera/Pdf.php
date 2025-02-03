<?php
header("Content-type: aplication/pdf");
require __DIR__ . '/vendor/autoload.php';

use Fpdf\Fpdf;

$tituloPDF = isset($_REQUEST['tituloPDF']) ? $_REQUEST['tituloPDF'] : 'Título del PDF';
$contenido = isset($_REQUEST['contenido']) ? $_REQUEST['contenido'] : 'Contenido del PDF';

$pdf = new Fpdf();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

//Titulo
$pdf->Cell(40, 10, $tituloPDF);
$pdf->Ln(10);

//Contenido
$pdf->SetFont('Arial', '', 12);
$pdf->MultiCell(190, 10, $contenido);

// Nombre archivo
$filename;
header("Content-type: application/pdf");
header("Content-Disposition: attachment; filename=$filename");
$pdf->Output('D', $filename, true);

?>