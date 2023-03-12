
<?php
  
$file = $_GET["file"] .".pdf";
  
// Satt til  pdf content
header('Content-Type: application/pdf');

// Kaller for
header('Content-Disposition: attachment; filename="downloaded.pdf"');

// Tar og laster ned OFF.pdf og åpner det
readfile('OFF.pdf');
?>