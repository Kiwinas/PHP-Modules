<?php
require_once("topp.php")
?>
<?php require_once('db.inc.php');        ?>

<!DOCTYPE html>
<html>
<body>

<h1>Annonser</h1>

<p>Se Tilgjengelige annonser og utgått anonnser</p>

<form method="post" action="">
  <label for="annonse">Velg annonse:</label>
  <select name="annonse" id="annonse">
    <option name="alle" value="Alle">Alle Annonser</option>
    <option name="Utgått" value="Utgåtte annonser">Utgåtte Annonser</option>
    <option name="Tiljgengelig" value="Tilgengelige annonser">Tilgjengelige Annonser</option>
    </select>
  <br><br>
  <input type="submit" name="submit" value="Velg">
</form>
 



</body>
</html>

<?php
if (isset($_POST['alle'])) {

$query = "SELECT * FROM Hybelutleie";

$q = $pdo->prepare($query);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}

$annonser = $q->fetchAll(PDO::FETCH_OBJ);
if($q->rowCount() > 0) {
    foreach($annonser as $annonse) {
        echo $annonse->Overskrift . " // ";
        echo $annonse->Månedsleie . " // ";
        echo $annonse->Depositum . " // ";
        echo $annonse->Boligtype . " // ";
        echo $annonse->Leieperiode . " // ";
        echo $annonse->Inkludert . " // ";
        echo $annonse->Tilgjengelig . " // ";
        echo $annonse->AntallRom . " // ";
        echo $annonse->Adresse . "<br>";
    }
} else {
    echo "Queryen førte tin en tom resultat";
}
}


if (isset($_POST['Utgått'])) {

    $query = "SELECT * FROM Hybelutleie WHERE Tilgjengelig = 0";
    
    $q = $pdo->prepare($query);
    
    try {
        $q->execute();
    } catch (PDOException $e) {
        echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
    }
    
    $annonser = $q->fetchAll(PDO::FETCH_OBJ);
    if($q->rowCount() > 0) {
        foreach($annonser as $annonse) {
            echo $annonse->Overskrift . " // ";
            echo $annonse->Månedsleie . " // ";
            echo $annonse->Depositum . " // ";
            echo $annonse->Boligtype . " // ";
            echo $annonse->Leieperiode . " // ";
            echo $annonse->Inkludert . " // ";
            echo $annonse->Tilgjengelig . " // ";
            echo $annonse->AntallRom . " // ";
            echo $annonse->Adresse . "<br>";
        }
    } else {
        echo "Queryen førte tin en tom resultat";
    }
    }

  
if (isset($_POST['Tiljgengelig'])) {

$query = "SELECT * FROM Hybelutleie WHERE Tilgjengelig = 1";

$q = $pdo->prepare($query);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}

$annonser = $q->fetchAll(PDO::FETCH_OBJ);
if($q->rowCount() > 0) {
    foreach($annonser as $annonse) {
        echo $annonse->Overskrift . " // ";
        echo $annonse->Månedsleie . " // ";
        echo $annonse->Depositum . " // ";
        echo $annonse->Boligtype . " // ";
        echo $annonse->Leieperiode . " // ";
        echo $annonse->Inkludert . " // ";
        echo $annonse->Tilgjengelig . " // ";
        echo $annonse->AntallRom . " // ";
        echo $annonse->Adresse . "<br>";
    }
} else {
    echo "Queryen førte tin en tom resultat";
}
}
?>
 
















<?php
/*
$query = "SELECT * FROM Hybelutleie WHERE Tilgjengelig = 1";

$q = $pdo->prepare($query);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}

$annonser = $q->fetchAll(PDO::FETCH_OBJ);
if($q->rowCount() > 0) {
    foreach($annonser as $annonse) {
        echo $annonse->Overskrift . " // ";
        echo $annonse->Månedsleie . " // ";
        echo $annonse->Depositum . " // ";
        echo $annonse->Boligtype . " // ";
        echo $annonse->Leieperiode . " // ";
        echo $annonse->Inkludert . " // ";
        echo $annonse->Tilgjengelig . " // ";
        echo $annonse->AntallRom . " // ";
        echo $annonse->Adresse . "<br>";
    }
} else {
    echo "The query resulted in an empty result set.";
*/
?>




<?php
require_once("Bunn.php")
?>