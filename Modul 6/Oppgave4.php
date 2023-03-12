<?php
require_once("topp.php")
?>
På et meldingshåndterings system er det lurt å starte med en klasse som heter for eksempel Meldingshåndtering, så ha egenskapene for eksempel egenskapene (funksjon)typemeldinger hvilkenEnhet, brukeren. <br>
<br>
På typemeldinger så kan det være om meldingene er gruppechat eller fra enkelperson, På hvilkenEnhet så er det får å registrere hvilken enhet os brukeren er på enten Andorid eller IOS
På Brukeren så er det hva selve bruekren  heter sånn at meldingehånsterings systemet har noe å refere til
<br>
Så er det viktig med funksjoner som sjekker for eksempel spamMeldinger, meldinger fått av komntaktlisten, meldinger fått fra ukjente, hvilkenEnhet sendt fra(Android eller Iphone), SorteringsFunksjon. <br>
<br>
Disse funksjonene kan håndtere hvor meldingene blir sendt for eksempel spamMeldinger funksjonen sender spam meldinger til en spam fil. Så er det viktig å ha en funksjon som sorterer hva den skal vise til brukeren. <br>
<br>
Denne funksjonen bruker flere av funksjonene og sorterer først fra kontakt liste så til ukjente og spam for eksempel til slutt som den viser til brukeren i den rekkefølgen. <br>
<br>
Det er viktig å kartlegge siden det gir oss bedre grunnlag før vi begynner å programmere og har fkatisk en plass å starte, så kan en endre dette underveis når en starte på koden. <br>
<?php
require_once("Bunn.php")
?>