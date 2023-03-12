<?php
require_once("Topp.php")
?>


<?php
$sum = 0;
//verdi som inneholder verdi 0

for($i=0;$i<=9;$i++)
//for loop som tar i verdi 0 og tar opp til 9 eller lik og plusser det opp med i++
{
    echo $i ."<br>";
    // melding som printer for loopen 0, 1, 2 osv opp til 9
    $sum += $i;
    //tar summen av alle i-ene og plusser alt sammen
   


}



?>

<?php
require_once("Bunn.php")
?>