<?php
require_once("Topp.php")
?>


<?php

$Saldo = 1700000;
//verdi som heter saldo som inneholder saldoen
$Rente = 3.1;
//rente med 3,1 verdi
$i = "";
for($i = 0; $i <= 5; $i++){
    //for loop som tar årene 0 til 5 

    $Saldo = $Saldo*$Rente;
    //tar saldo og ganger det med rente
    echo " Når det har gått " . $i . " år er det " .  $Saldo  . " på kontoet" . "<br>";
        //printer ut året (i) og hvor mye saldoen har gått med renten hvert år
}

?>

<?php
require_once("Bunn.php")
?>