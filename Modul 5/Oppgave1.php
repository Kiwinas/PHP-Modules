<?php
require_once("topp.php")
?>
<?php
function gjennomsnittAvTall($tall1, $tall2, $tall3, $tall4) {
    $gjennomsnitt = ($tall1 + $tall2 + $tall3 + $tall4)/4;
    return $gjennomsnitt;
    //funksjon for regne ut gjennomsnitt med fire verdier

}

function standardAvik($tall1, $tall2, $tall3, $tall4)
    {
        $arr = array($tall1, $tall2, $tall3, $tall4);
        //tar 4 verdiene inni en array

        $num_of_elements = count($arr);
        //tar og lager en verddi som tar og count arrayen arr
          
        $variance = 0.0;
        //setter variance til 0.0
          
                
        $average = array_sum($arr)/$num_of_elements;
        //tar og regner ut gjennomsnittet
          
        foreach($arr as $i)
        {
            
            $variance += pow(($i - $average), 2);
            //regnskap for standark avvik bruker pow
        }
          
        return (float)sqrt($variance/$num_of_elements);
        //funksjon som renger ut standard avvik ved å bruke sqrt
    }

    
      
   

$Oppg1 = gjennomsnittAvTall(2134, 1423, 442, 4213);
echo "Gjennomsnittet av tallene er: ", $Oppg1, "<br>" ;

$Oppg2 = standardAvik(2134, 1423, 442, 4213);
echo "Standardavik av tallene er: ", $Oppg2;

//bruker begge funksjonene

?>
<?php
require_once("Bunn.php")
?>
