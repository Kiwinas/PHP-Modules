<?php
require_once("Topp.php")
?>


<?php
$kommune = "Bergen";
//byen som er valgt
$fylke = match($kommune) {
//funksjon match som tar for seg forskjellige fylker og hvilken byer de tilhører
    "Kristiansand" => "Agder",
    "Lillesand" => "Agder",
    "Birkenes" => "Agder",
    "Trondheim" => "Trøndelag",
    "Harstad" => "Troms og Finnmark",
    "Kvæfjord" => "Troms og Finnmark",
    "Tromsø" => "Troms og Finnmark",
    "Bergen" => "Vestland",
    "Bodø" => "Norland"


};

echo $kommune . " ligger i " . $fylke . " fylke";
//viser til hvor kommunen ligger i hvilken fylke



?>

<?php
require_once("Bunn.php")
?>

