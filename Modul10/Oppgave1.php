<?php
require_once("topp.php")
?>
<?php
require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/Exception.php";
require_once "PHPMailer/src/SMTP.php";
$mail = new PHPMailer\PHPMailer\PHPMailer();
$fnavn = "Silje"; $enavn = "Johansen"; $kode = "abc"; $epost = "kevinas@lyse.net" ;

try 
{
  $mail->IsSMTP();
  $mail->SMTPDebug = 1; // debugging: 1 = feil og melding, 2 = kun meldinger
  $mail->SMTPAuth = true;
  $mail->SMTPSecure = "tls";
  $mail->Host = "localhost";
  $mail->Port = 25;
  $mail->Username = "root";
  $mail->Password = "";

   //meldingstekst for html mottakere
  $mld  = "Kjære " . $fnavn . ". <br><br>";
  $mld .= "Takk for at du registrerer deg hos oss. <br><br>";
  $mld .= "Vennligst klikk nedenfor for å sette opp kontoen din: <br>";
  $mld .= '<a href="http://localhost/bekreftelse.php?k=' . $kode . '">Bekreft din registrering</a> <br><br>';
  $mld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten. <br><br>";

 //ikke html mottakere
  $amld  = "Kjære " . $fnavn . ". \n\n";
  $amld .= "Takk for at du registrerer deg hos oss. \n\n";
  $amld .= "Vennligst klikk nedenfor for å sette opp kontoen din: \n";
  $amld .= "http://localhost/bekreftelse.php?k=" . $kode . " \n\n";
  $amld .= "Hvis dette ikke var deg, kan du trygt ignorere denne e-posten. \n\n";

  $mail->isHTML(true);
  $mail->From = "kevinasm@uia.no";
  $mail->FromName = "IS-115 PHP";
  $mail->addAddress($epost, $fnavn . " " . $enavn);
  $mail->Subject = "Registrering: kun ett steg unna nå!";
  $mail->Body = $mld;
  $mail->AltBody = $amld;
  $mail->send();
  echo "E-post er sendt";
} 
catch(Exception $e) 
{
  echo "Noe gikk galt: " . $e->getMessage(); // Kun for oss - aldri skriv ut feilmeldinger på skjerm til bruker
}
?>

<?php
require_once("Bunn.php")
?>