<?php
require_once("topp.php")
?>
<?php require_once('db.inc.php');        ?>



<h1>Annonser</h1>
<br>
<?php

$query = "SELECT * FROM Hybelutleie";
//query som velger alle radene fra hybelutleie

$q = $pdo->prepare($query);
//funksjon prepare for queryen

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
//slår opp feil hvis queryen ikke går gjennom

echo "<table class='table'>";
echo " 
 <tr>
     <th> Overskrift  </th>
     <th> Månedsleie</th>
     <th> Depositum </th>
     <th> Boligtype </th>
     <th> Leieperiode </th>
     <th> Inkludert </th>
     <th> Tilgjengelighet </th>
     <th> Antall Rom </th>
     <th> Adresse </th>
 </tr>";
 //hode tabbel
$annonser = $q->fetchAll(PDO::FETCH_OBJ);
//annonser som henter informasjon fra pdo altså databasen
if($q->rowCount() > 0) {
    //hvis rowcount er større enn 0
    foreach($annonser as $annonse) {
        //går gjennom hver objekt i databsen
       
        echo "<tr>";
        echo "<td>" . $annonse->Overskrift . "</td>";
        echo "<td>" . $annonse->Månedsleie . "</td>";
        echo "<td>" . $annonse->Depositum . "</td>";
        echo "<td>" . $annonse->Boligtype . "</td>";
        echo "<td>" . $annonse->Leieperiode . "</td>";
        echo "<td>" . $annonse->Inkludert . "</td>";
        echo "<td>" . $annonse->Tilgjengelig . "</td>";
        echo "<td>" . $annonse->AntallRom . "</td>";
        echo "<td>" . $annonse->Adresse . "</td>";
        echo "</tr>";
        //hoved inholdet til tabblene
       
    }
} else {
    echo "Queryen førte tin en tom resultat";
}

?>

<?php
require_once("Bunn.php")
?>
