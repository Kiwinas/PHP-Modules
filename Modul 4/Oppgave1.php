<?php
require_once("Topp.php")
?>

<?php

$matrise = array(0,3,5, 7,8,15);
//matrise med forskjellige verdier

print_r($matrise);
//printer inneholde i matrisen
foreach ($matrise as $key => $value) {

print_r("<br>" . $key . ":" . $value);
//foreach som tar for seg  matrisen som key og viser value i hver av indeksene

}



?>

<?php
require_once("Bunn.php")
?>