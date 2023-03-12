<?php
require_once("Topp.php")
?>
<?php
echo "Bruker registrert med følgende informasjon: <br>" ;

if(isset($_POST["registrer"]))
{
        //tar post metoden fra registrer knappem

        foreach($_POST as $key => $value) //$key viser nøkkelen ikke bare verdien hvis du hadde skrevet bare $value
//foreach for å printe ut verdien fra skjemaet
        {
                
                echo $key . ": ". $value . "<br>";

        }


}

?>
<?php
require_once("Bunn.php")
?>