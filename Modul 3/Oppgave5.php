<?php
require_once("Topp.php")
?>


<?php
$corn = 1;$fmt = new NumberFormatter("no", NumberFormatter::SPELLOUT);
//verdi som inneholder 1 og funksjon numberformatter
for ($i=1; $i <= 64; $i++)  {
   //i som starter på 1 og går opp til 64
   $corn *= 2;
      //tar og ganger corn med 2 for hver gang det går opp
   if ($corn > 1000000000)
   
    {
      echo "Rute nr. ". $i . " har tallet: " . $fmt->format($corn);
 //if loop hvis taller er en milliard brukes det numberformatter
  break;
  
  }}
?>

<?php
require_once("Bunn.php")
?>