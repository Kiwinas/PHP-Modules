<?php
require_once("topp.php")
?>
<?php


if(($fh = fopen("brukere.csv","r")) !== FALSE) {
    $rowno = 1;
    while(($row = fgetcsv($fh, 0, ",")) !== FALSE) { 
        $row = array_filter($row);
        $num = count($row);
        if($num) { 
            echo "<p>$num felt på linje $rowno:<br/></p>\n";
            $rowno++;
            for($f=0;$f<$num;$f++) { 
                echo $row[$f]."<br/>\n";
            }
        }
    }
    fclose($fh);
} else {
    echo "Kan ikke åpne filen";
}
?>

<?php
require_once("Bunn.php")
?>