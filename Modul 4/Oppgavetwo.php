<?php
require_once('db.inc.php'); ?>

<?php



if (isset($_POST['registrer'])) {
    $fnavn = $_POST['fnavn'];
    $enavn = $_POST['enavn'];
    $epost = $_POST['epost'];
    $tlf = $_POST['tlf'];
    $fdato = date('Y-m-d', strtotime($_POST['fdato']));
}
$sql = "INSERT INTO Brukere  
        (fnavn, enavn, epost, tlf, fdato) 
        VALUES 
        (:fnavn, :enavn, :epost, :tlf, :fdato)"; 

$q = $pdo->prepare($sql);

$q->bindParam(':fnavn', $fnavn, PDO::PARAM_STR);
$q->bindParam(':enavn', $enavn, PDO::PARAM_STR);
$q->bindParam(':epost', $epost, PDO::PARAM_STR);
$q->bindParam(':tlf', $tlf, PDO::PARAM_STR);
$q->bindParam(':fdato', $fdato, PDO::PARAM_INT);

try {
    $q->execute();
} catch (PDOException $e) {
    echo "Error querying database: " . $e->getMessage() . "<br>"; // Never do this in production
}
//$q->debugDumpParams();

if($pdo->lastInsertId() > 0) {
    echo "Data inserted into database, identified by UID " . $pdo->lastInsertId() . ".";
} else {
    echo "Data were not inserted into database.";
}

?>



