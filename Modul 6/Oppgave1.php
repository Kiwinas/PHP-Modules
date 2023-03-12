<?php
require_once("topp.php")
?>
<?php
class  Bruker {
    //klasse bruker med forskjellige klasseegenskaper
        public $fornavn;
        public $etternavn;
        public $brukernavn;
        public $registreringsdato;

     
             
      




        public function fullt_navn(){
            return "Fulle navnet til personen er $this->fornavn $this->etternavn";
        }
        //funksjon som returnerer fullenavnet til et person (objektet)

        public function person_brukerNavn(){
            return "brukernavnet til $this->fornavn er $this->brukernavn";
            //funksjon som returnerer brukernavnet til en person med fornavn
        }




}
$bruker1 = new Bruker("Kevin", "Maksevicius");
//oprettet ny object bruker 1 
$student1->etternavn = "Maksevicius";
$bruker1->brukernavn = "Lord Vader";
//setter verdiene til klasseegenskapene
echo $bruker1->fullt_navn() . "<br>";
echo $bruker1->person_brukerNavn() . "<br>";
//bruker funksjonene til klassen og bruker echo for å printe ut





?>
<?php
require_once("Bunn.php")
?>