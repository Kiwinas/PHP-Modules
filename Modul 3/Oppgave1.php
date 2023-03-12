<?php
require_once("Topp.php")
//for menyen fra topp.php
?>



<?php
$navn = "Edward Kenway";
$alder = 22;
//en verdi med navn og en verdi med alder

if($alder >= 18 ){
    //if loop som sjekker verdien alder om en er eldre enn 18 og printer ut følgende melding
    
    echo "$navn er voksen";



}

elseif($alder >= 13){
    //elseif loop som sjekker om noen er 13 eller eldre og printer ut meldingen under
    echo "Du er en tenåring";


}
else{
    //hvis ikke annen loop er oppgitt går det til else som printer ut meldingen under

    echo "Du er ikke voksen";
}




?>

<?php
require_once("Bunn.php")
?>