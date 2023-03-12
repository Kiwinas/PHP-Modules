<?php
require_once("Topp.php")
?>
<?php
$Formula1 = array(0 => "Ferrarri", 1 => "Alpine",2 => "Haas",3 => "Mercedes",4 => "Williams",5 => "Red Bull",6 => "Aston Martin", 7 => "Alfra Romeo", 8 => "McLarem",9 => "Alpha Tauri" );
//assiosiativ array med forskjellige verdier 
print "<pre>";
//lager mellomrom til array
print_r($Formula1);
//printer ut array
$Bilmerker = array(0 => "BMW", 1 => "Renault",2 => "Audi",3 => "Pegiot",4 => "Porsche",5 => "Honda",6 => "Lamborghini", 7 => "Toyota", 8 => "öpel",9 => "Volkswagen" );
//array med nye forskjellige verdier
$NyFormula1 = array_replace($Formula1, $Bilmerker);
//array_replace erstatter array formula 1 med bilmerker og lager en ny array
print "<pre>";
print_r($NyFormula1);
//pringer ut den nye matrisen som erstatett

$starting_index = 10;
//starting_index med 10

$NyFormula1 = array_combine(array_keys(array_fill($starting_index, count($NyFormula1), 1)), array_values($NyFormula1));
//funksjon som gjør at start index arrayen tar counting med 10
print_r($NyFormula1);
//printer det nye array 


?>
<?php
require_once("Bunn.php")
?>