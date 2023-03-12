<?php
require_once("topp.php")
?>

<!DOCTYPE html>
<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
  
 
  <input type="submit" value="submit" name="submit">
  <input type="submit" value="sjekk" name="sjekk">
  <?php //to knapper submit for å sette inn navn i filen og sjekk for å sjekke siste hendelsen og å åpne filen ?>
</form>

</body>
</html>
<?php
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
//åpner filen
$txt = " Donald Duck\n ";
//tekst til filen
$date = date("d.m.Y \k\l. H:i:s");
//dato
if(isset($_POST['submit'])){
fwrite($myfile, $txt);
//skriver inn teksten til filen
fwrite($myfile, $date);
//setter dato for hendelsen til teksten inni filen
fclose($myfile);
//lukker filen

}


$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
if(isset($_POST['sjekk'])){
echo fread($myfile, filesize("newfile.txt")) . "<br>";
//leser hva det står inni filen
fclose($myfile);
}
?>
<?php
require_once("Bunn.php")
?>