<?php
require_once("topp.php")
?>
<?php
$target_dir = "uploads/";
//laster opp bilde her
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Sjekker om bilde er faktisk en bilde eller ikke
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

// Sjekker hvis filen eksisterer fra før
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}

// Sjekker fil størrelse
if ($_FILES["fileToUpload"]["size"] > 200000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Tillater bare noen fil formatter OBS må ha med jpeg siden hvis du laster opp jpg fil blir den automatisk til jpeg når du laster det opp
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
 ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Sjekker hvis opplastningen går gjennom
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// Hvis alt er ok laster det den opp (Måtte gi tillatelse fra pc for å gjøre dette)
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}

?>
<?php
require_once("Bunn.php")
?>