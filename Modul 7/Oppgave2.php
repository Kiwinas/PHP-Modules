<?php
require_once("topp.php")
?>
<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "Registrer");

if (isset($_POST['registrer'])) {
  $fnavn = $_POST['fnavn'];
  $enavn = $_POST['enavn'];
  $epost = $_POST['epost'];
  $tlf = $_POST['tlf'];
  $fdato = date('Y-m-d', strtotime($_POST['fdato']));

  $query = "INSERT INTO Brukere (fnavn, enavn, epost, tlf, fdato) VALUES ('$fnavn', '$enavn', '$epost','$tlf', '$fdato')";
  $query_run = mysqli_query($con, $query);
  if ($query_run) {
      $_SESSION['status'] = "Date values inserted";
      header("Location: Vellyket.php");
  }
  else{
    $_SESSION['status'] = "Date values not inserted";
    header("Location: IkkeVellyket.php");
  }
}





?>


<html>
  <head>
    <title>Registrering av bruker</title>
  </head>
<body>
<pre>
<form method="post" action="">
  Fornavn: <input type="text" name="fnavn" placeholder="Fornavn" required><br>
  Etternavn: <input type="text" name="enavn" placeholder="Etternavn" required><br>
  Email: <input type="email" name="epost" placeholder="E-post" required><br>
  Telefon: <input type="tel" name="tlf" placeholder="Mobilnummer" value="" required><br>
  Fødselsdato: <input type="date" name="fdato" value="" required><br>
  <input type="submit" name="registrer" value="Registrér"  >
  <?php
  /* Html skjema med forskjellige type input og required felt etter behov og en value som inneholder if hvis noen har skrevet inn feltet og laster det på ny
  er linket til oppgaveto.php som printer ut skjema verider som er utfylt
  */
  ?>
</form>
</pre>
</body>
</html>



<?php
require_once("Bunn.php")
?>


