<?php
require_once("topp.php")
?>
<?php




class Bruker {
        public $fornavn;
        public $etternavn;
        protected $brukernavn;
        protected $registreringsdato;
        //klasse Bruker med forskjellige klasseegenskaper

        function __construct($fornavn, $etternavn)
        //legger inn verdiene egenskapene fornavn og etternavn i constructor for at det er nødvendig når en oppreter en ny bruker
        {
            $this->fornavn = $fornavn;
            $this->etternavn = $etternavn;
            $this->brukernavn = self::generertBrukernavn($fornavn, $etternavn); //blir generert med klassen generertBrukernavn
            $this->registreringsdato = date("d.m.y H:i:s"); //setter dato og klokkelsett når bruker ble registrert
            
        }
             
        function generertBrukernavn($fornavn, $etternavn) {
            $navn = str_shuffle($fornavn) . str_shuffle($etternavn);
            //bruker str_shuffle funskjonen for å gjøre om på fornavn og etternavn
        $navn .= rand(0, 100);
        //så blir et tilfeldig nummer mellom 0-100 lagt til i slutten 
        return $navn;
        //returnerer brukernavnet

           
            
        }
       
      

        function __destruct()
        {
            return $this->brukernavn;
            //destruct for å avslutte en "sequence" for eksempel en bruker
        }



   




}
class Student extends Bruker {
//klasse student som arver egenskapene fra klasse Bruker
    function hentInfo(){
       $info = array(
        "Fornavn"=>$this->fornavn,
        "Etternavn"=>$this->etternavn,
        "Brukernavn"=>$this->brukernavn,
        "Registreringsdato"=>$this->registreringsdato
       );
       //funksjon hentInfo som tar for seg en array og vi definerer key og viser til hvilken value den skal tilhøre

       foreach($info as $key => $value) {
        echo "$key: $value <br>";
        //foreach som tar array info og går gjennom arrayen både key som vi definerte og value innforbi der
       }
    }
    
}

$student1 = new Student("Kevin", "Maksevicius");
//oprettet vi en ny student objekt
echo $student1->hentInfo(). "<br>";
//bruker funksjon hentinfo for å se hva student1 inneholder og bruker echo for å printe det ut





$student2 = new Student("Kjetil" , "Hansen");
echo $student2->hentInfo();
//bruker funksjon hentinfo for å se hva student1 inneholder og bruker echo for å printe det ut

$brukerSlettet = $student1->__destruct();
$brukerSlettet2 = $student2->__destruct();
//lager to verdier med student objektene og bruker funksjon destuct på de 

$slettedeBrukere = array($brukerSlettet, $brukerSlettet2);
//lagrer de slettede objektene når vi brukte destruct
echo "<br> Brukere som er slettet ";
print_r($slettedeBrukere);
//printer ut de brukere som er slettet


?>
<?php
require_once("Bunn.php")
?>