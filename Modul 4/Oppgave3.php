<?php
require_once("Topp.php")
?>
<?php
$deltakere = array("fnavn" => "Silje", "enavn" => "Hamresand", "epost" => "Silje@KrsKommune.no", "tlf" => "94567893", "fdato" => "2001-05-05" );
//arrat med forskjellige verdien som er tilpasset skjemaet
if(isset($_REQUEST["registrer"])) {
    if ($_REQUEST["fnavn"] != $deltakere ["fnavn"]){
    $deltakere["fnavn"] = $_REQUEST["fnavn"];
    echo "fornavn er oppdatert" . "<br>";
}
if ($_REQUEST["enavn"] != $deltakere ["enavn"]){
    $deltakere["enavn"] = $_REQUEST["enavn"];
    echo "Etternavn er oppdatert" . "<br>";
}
if ($_REQUEST["epost"] != $deltakere ["epost"]){
    $deltakere["epost"] = $_REQUEST["epost"];
    echo "E-mailen er oppdatert" . "<br>";
}
if ($_REQUEST["tlf"] != $deltakere ["tlf"]){
    $deltakere["tlf"] = $_REQUEST["tlf"];
    echo "Telefonen er oppdatert" . "<br>";
}
if ($_REQUEST["fdato"] != $deltakere ["fdato"]){
    $deltakere["fdato"] = $_REQUEST["fdato"];
    echo "Fødselsdato er oppdatert" . "<br>";
}
//if funskjoner som viser hvis det er noen oppdateringer til matrisen fra skjemaet


   
    else{
   
        echo "Ingen andre oppdateringer";
    };
    //printer ut ingen andre oppdateringer hvis ikke noe mer er oppdatert
 
}






?>

<html>
  <head>
    <title>Registrering av bruker</title>
  </head>
<body>
<pre>
<form  method="post"  action="<?php $_SERVER["PHP_SELF"]; ?>">
  Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" value="<?php if(isset ($deltakere["fnavn"])) echo $deltakere["fnavn"] ?>" required><br>
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" value="<?php if(isset ($deltakere["enavn"])) echo $deltakere["enavn"] ?>" required><br>
  E-post: <input type="email" name="epost" placeholder="E-post" value="<?php if(isset ($deltakere["epost"])) echo $deltakere["epost"]?>"> <br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" value="<?php if(isset ($deltakere["tlf"])) echo $deltakere["tlf"] ?>" required><br>
  Fødselsdato: <input type="date" name="fdato" value="2001-05-05" value="<?php if(isset ($deltakere["fdato"])) echo $deltakere["fdato"] ?>" required><br>
  <input type="submit" name="registrer" value="Registrér"  >
</form>
</pre>
</body>
</html>
<?php //samme skjema som har action php self of if issett på alle input for å vise verdien i matrisen oppover ?>

<?php
require_once("Bunn.php")
?>