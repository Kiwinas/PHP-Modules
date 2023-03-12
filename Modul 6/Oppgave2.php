<?php
require_once("topp.php")
?>
<?php
class Bruker {
      //klasse bruker med forskjellige klasseegenskaper
        public $fornavn;
        public $etternavn;
        public $brukernavn;
        public $registreringsdato;


        public function fullt_navn(){
            return "Fulle navnet til personen er $this->fornavn $this->etternavn";
        }

        public function person_brukerNavn(){
            return "brukernavnet til $this->fornavn er $this->brukernavn";

        }




}

class Student extends Bruker {
//klasse student som arver egenskapene fra klasse Bruker
    
                public function fullt_navn(){
                        return parent::fullt_navn() . " og han/hun er en student. ";
                        //bruker funskjon parent:: for å overide funskjon fra klasse bruker fullt_navn
                } 
}
$student1  = new Student("Kevin", "Maksevicius");
//oprettet vi en ny student objekt
$student1->fornavn = "Kevin";
$student1->etternavn = "Maksevicius";
$student1->brukernavn = "Vader";
//setter verdiene til klasseegenskapene

echo $student1->person_brukerNavn() . "<br>";

echo $student1->fullt_navn() . "<br>";
//bruker funksjonen fullt_navn



?>
<?php
require_once("Bunn.php")
?>