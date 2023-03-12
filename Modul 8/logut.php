<?php

session_start();

if(isset($_SESSION['bruker_id']))
{
	unset($_SESSION['bruker_id']);

}

header("Location: login.php");
die;