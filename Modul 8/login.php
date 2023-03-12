<?php 

session_start();


include("db.inc.php");
include("funksjoner.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//henter fra post
		$brukernavn = $_POST['brukernavn'];
		$passord = md5($_POST['passord']);

		if(!empty($brukernavn) && !empty($passord) && !is_numeric($brukernavn))
		{

			//sjekker opp mot databsen
			$query = "select * from LoginBrukere where brukernavn = '$brukernavn' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['passord'] === $passord)
					{

						$_SESSION['bruker_id'] = $user_data['bruker_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			//kode for å sjekke om passord er skrevet inn stemmer og om brukernavn stemmer ved å bruker bruker_id
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="Main.css">

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="brukernavn" ><br><br>
			<input id="text" type="password" name="passord" ><br><br>

			<input id="button" type="submit" value="Login" class="btn btn-primary"><br><br>

			<a href="Registrer.php">
            <input id="button" value="Registrer" class="btn btn-primary"> </a> <br><br>
        
		</form>
	</div>
</body>
</html>