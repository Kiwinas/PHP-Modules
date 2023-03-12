

<?php
use setasign\Fpdi\Fpdi;

require_once('fpdf/fpdf.php');
require_once('FPDI/src/autoload.php');

$pdf = new Fpdi();

$pdf->AddPage();
//lager ny pdf side
$pdf->setSourceFile('Innlevering 9_fakturamal.pdf');
//importerer pdf-fil som vi benytter fakturamal fra innlevering 9

$første = $pdf->importPage(1);
//importerer første siden av pdf filen

$pdf->useTemplate($første, 10, 10, 100);
//bruker pdf filen som mal


$pdf->SetFont('Arial' , 'B' , '14');
//setter font størrelse
$pdf->SetTextColor(255, 0, 0);
//setter farge
$pdf->SetXY(30, 30);
//Definerer abscissa og ordinate sin posisjon
$pdf->Write(0, 'Dette er en enkel tekst');
//skrivver
$pdf->Image('B533282D-3018-4600-BD1A-3FF704524C64.jpeg', 85, 50, 80, 0, "", "");
//legger inn bilde (Hvilken bedriftslogoo?) setter inn bilde nederst som eksempel
$pdf->Output('I', 'generated.pdf');
//lager pdf fil og viser den i nettleser










?>
