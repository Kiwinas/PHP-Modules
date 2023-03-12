<?php
require_once("topp.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$kat = "PHPwebprogramering/";
//setter direktoratet til følgende fil
$peker = opendir($kat);
//åpner direktoratet

echo "<table border=\"1\">";
echo "<tr>";
echo "<th>Filnavn</th>";
echo "<th>Filtype</th>";
echo "<th>Filstr.</th>";
echo "<th>Sist endret</th>";
echo "<th>Lesbarhet</th>";
echo "<th>Skrivbarhet</th>";
echo "<th>Kjørbarhet</th>";
echo "</tr>";
//tabbel for direktoratet

while($fil = readdir($peker)) {
        echo "<tr>";
        echo "<td><a href=\"" . $kat . $fil . "\">" . $fil . "</a></td>";
        echo "<td>" . filetype($kat . $fil) . "</td>"; //filtype
        echo "<td>". filesize($kat. $fil). "</td>"; //fil størrelse
        echo "<td>" . date("d.m.Y \k\l. H:i:s", filemtime($kat . $fil)) . "</td>"; //dato for endret sist
        echo "<td>" . (is_readable($kat . $fil) ? "J" : "N") . "</td>"; // om den er leselig
        echo "<td>" . (is_writeable($kat . $fil) ? "J" : "N") . "</td>"; // om den er skrivelig
        echo "<td>" . (is_executable($kat . $fil) ? "J" : "N") . "</td>"; // om den er kjørbar
        echo "</tr>";

    
}
closedir($peker);
//lukker direktoratet









?>
</body>
</html>

<?php
require_once("Bunn.php")
?>