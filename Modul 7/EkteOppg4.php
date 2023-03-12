<?php
require_once("topp.php")
?>
<?php require_once('db.inc.php');        ?>

<!DOCTYPE html>
<html>
<body>

<div style="margin: 50px;">
<h1>Annonser</h1>


<p>Se Tilgjengelige annonser og utgått anonnser</p>
<form method="post" action="">
  <input class='btn btn-primary btn-sm' type="submit" name="tilgjengelig" value="Tilgjengelig">
  <input class='btn btn-primary btn-sm' type="submit" name="utgått" value="Utgått">
  <input class='btn btn-primary btn-sm' type="submit" name="alle" value="Alle">
</form>
</div>
<?php
if (isset($_POST['alle'])) {

$query = "SELECT * FROM Hybelutleie";

$q = $pdo->prepare($query);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
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
$annonser = $q->fetchAll(PDO::FETCH_OBJ);
if($q->rowCount() > 0) {
    foreach($annonser as $annonse) {
       
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
       
    }
} else {
    echo "Queryen førte tin en tom resultat";
}
}
echo "<table>";
echo "<br>";
if (isset($_POST['utgått'])) {

    $query = "SELECT * FROM Hybelutleie WHERE Tilgjengelig = 0";
    
    $q = $pdo->prepare($query);
    
    try {
        $q->execute();
    } catch (PDOException $e) {
        echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
    }
    echo "<table class='table'>";
    echo "<tr>";
    echo "<th>Overskrift</th>";
    echo "<th>Månedsleie</th>";
    echo "<th>Depositum</th>";
    echo "<th>Boligtype</th>";
    echo "<th>Leieperiode</th>";
    echo "<th>Inkludert</th>";
    echo "<th>Tilgjgengelighet</th>";
    echo "<th>Antall-rom</th>";
    echo "<th>Adresse</th>";
    echo "</tr>";
    
    $annonser = $q->fetchAll(PDO::FETCH_OBJ);
    if($q->rowCount() > 0) {
        foreach($annonser as $annonse) {
           
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
          
        }
    } else {
        echo "Queryen førte tin en tom resultat";
    }
    }
    echo "</table>";
    echo "<br>";

  
if (isset($_POST['tilgjengelig'])) {

$query = "SELECT * FROM Hybelutleie WHERE Tilgjengelig = 1";

$q = $pdo->prepare($query);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
echo "<table class='table'>";
echo "<tr>";
echo "<th>Overskrift</th>";
echo "<th>Månedsleie</th>";
echo "<th>Depositum</th>";
echo "<th>Boligtype</th>";
echo "<th>Leieperiode</th>";
echo "<th>Inkludert</th>";
echo "<th>Tilgjgengelighet</th>";
echo "<th>Antall-rom</th>";
echo "<th>Adresse</th>";
echo "</tr>";
$annonser = $q->fetchAll(PDO::FETCH_OBJ);
if($q->rowCount() > 0) {
    foreach($annonser as $annonse) {
   
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
       
    }
} else {
    echo "Queryen førte tin en tom resultat";
}
}
echo "</table>";
echo "<br>";
?>
 

 </body>
</html>










<?php
require_once("Bunn.php")
?>






