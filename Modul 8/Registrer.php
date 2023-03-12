<?php 
session_start();

	
include("db.inc.php");
include("funksjoner.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$brukernavn = $_POST['brukernavn'];
		$passord = md5($_POST['passord']);

		
		if(!empty($brukernavn) && !empty($passord) && !is_numeric($brukernavn))
		{

			//save to database
			$bruker_id = random_num(20);
			$query = "insert into LoginBrukere (bruker_id,brukernavn,passord) values ('$bruker_id','$brukernavn','$passord')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	
</head>
<body>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="Main.css">
	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: black;">Registrer</div>

			<input id="text" type="text" name="brukernavn"><br><br>
			<input id="text" type="password" name="passord"><br><br>

			<input id="button" type="submit" value="Registrer Bruker" class="btn btn-primary"><br><br>

            <a href="login.php">
            <input id="button" value="Login her" class="btn btn-primary"> </a> <br><br>
		</form>
	</div>
</body>
</html>