<?php
require_once("Topp.php")
?>
<?php
$deltakere = array("Kevin" => "", "Simen" => "", "Kenny" => "", "Gitte" => "", "Jake" => "", "Finn" => "", "Karoline" => "", "Kjetil" => "", "Natali" => "", "Simon" => "");
//asosiativ array med deltaker navn
echo "Konkuranse med deltakere og poeng, hvem vinner? <br>";


foreach ($deltakere as $key => $value){
    echo "Navn på deltakere $key <br>";
}
//foreach som tar deltaker som key og value
foreach ($deltakere as $key => $value){
    $randomNumbers = rand(1, 50);
    $deltakere[$key] = $randomNumbers;
    //for each som gir random nummere til deltakere
}
foreach ($deltakere as $key => $value){
  echo "<br> $key har $value poeng <br>";
  //printer ut hvilken poeng hver deltaker fikk
}
while(count($deltakere) > 1){

    $minsteValue = min($deltakere);
//while som counter en deltaker og min som tar den deltakeren med minst poeng
    foreach ($deltakere as $key => $value){

        if($value === $minsteValue){
            unset($deltakere[$key]);
            echo "<br> $key har blitt eliminert fra konkuransen <br>";
        }
        //if som tar deltaker med minst poeng og eliminerer fra array ved å bruke unset
}



asort($deltakere );
//tar arrayen og tar og viser det i "ascending order"

if (count($deltakere) > 1){
    foreach ($deltakere as $key => $value){
        echo "<br> $key har $value poeng <br>";
    } 
} else {
    echo "<br> $key vant konkurannsen<br>";
    //printer ut deltaker som vant konkuransen
}



}





?>
<?php
require_once("Bunn.php")
?>