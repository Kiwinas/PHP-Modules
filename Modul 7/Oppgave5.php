<?php
require_once("topp.php")
?>
<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'Registrer');
    $dsn = 'mysql:dbname=' . DB_NAME . ';host=' . DB_HOST; // Driver is set here

    try {
        $pdo = new PDO($dsn, DB_USER, DB_PASS);
    } catch (PDOException $e) {
        echo 'Error connecting to database: ' . $e->getMessage(); // Never do this in production
    }
?>
<h1>Bruker preferanser til Bolig</h1>
<br>
<br>
<?php


$query = "SELECT BrukerPreferanser.BrukerId, Brukere.fnavn,BrukerPreferanser.Preferanse1 FROM Brukere, BrukerPreferanser WHERE Brukere.BrukerId=BrukerPreferanser.BrukerId ORDER BY Preferanse1"; //SELECT Preferanse1, COUNT(*) FROM BrukerPreferanser GROUP BY Preferanse1;




$q = $pdo->prepare($query);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}



echo "<table class='table'>" ;
echo " 
 <tr>
     <th> Preferanser  </th>
     <th> Navn </th>
    
 </tr>";

 
$preferanser = $q->fetchAll(PDO::FETCH_OBJ);
if($q->rowCount() > 0) {
    foreach($preferanser as $preferanse) {
       
        echo "<tr>";
        echo "<td>" . $preferanse->Preferanse1 . "</td>";
        echo "<td>" . $preferanse->fnavn;
        echo "</tr>";
       
    }
} else {
    echo "Queryen førte tin en tom resultat";
}

?>



<?php
require_once("Bunn.php")
?>