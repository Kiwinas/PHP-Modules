<?php
$url = "http://api.openweathermap.org/data/2.5/weather?q=las palmas&units=metric&appid=cd482db853d63c97c8a280d96d473bb0";

        ## ALT 1: cUrl

        /* Initialiserer en cUrl-økt */
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


$weather=json_decode($result, true);
echo "<pre>";
//print_r($weather);
echo "</pre>";

/* Viser vær på skjermen */
echo "<pre>";
echo "<strong>The weather today:</strong><br>";
echo $weather['name'] . ": " . $weather['weather'][0]['description'] . ", " . $weather['main']['temp'] . "C, " . 
  $weather['wind']['speed'] . " m/sec(?) in direction " . $weather['wind']['deg'] . " degrees";
echo "</pre>";
?>