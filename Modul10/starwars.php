<?php
$url = "https://swapi.dev/api/planets/";

$ch=curl_init();
$param = array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($ch, $param);

/* Utfør cURL-forespørsel med innstillinger */
$result = curl_exec($ch);
$resinfo = curl_getinfo($ch); // Inneholder informasjon om forespørselen
curl_close($ch);

## ALT 2: file_get_contents

/* Hent data med file_get_contents */
$result = file_get_contents($url) or die("Kan ikke finne filen/URL");

echo  $result; exit();



$starwars = json_decode($result, true);

print_r($starwars['planets']);



/*$arrayLength = count($starwars['planets']);
$i = 0;
while($i = $arrayLength){
    echo $starwars['planets'] . "<br>";
    $i++ . "<br>";

}
*/




?>