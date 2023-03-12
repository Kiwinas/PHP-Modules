<?php

function check_login($con)
{

	if(isset($_SESSION['bruker_id']))
	{

		$id = $_SESSION['bruker_id'];
		$query = "select * from LoginBrukere where bruker_id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{

			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
	//funksjon for å sjekke om en bruker har logget inn og har tilgang til nettsiden


	//redirect til login
	header("Location: login.php");
	die;

}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}
//funksjon for å gi random tall til bruker_id
	return $text;

}