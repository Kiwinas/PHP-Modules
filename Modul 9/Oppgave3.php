<?php
require_once("topp.php")
?>

<!DOCTYPE html>
<html>
<body>

<form action="Oppgave3fil.php" method="post" enctype="multipart/form-data">
  <h1>Velg bilde til å laste opp</h1>
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Last opp bilde" name="submit">
<?php //knapper for opplastning av fil ?>
</form>

</body>
</html>
<?php
require_once("Bunn.php")
?>