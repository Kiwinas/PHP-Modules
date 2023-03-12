<?php 
session_start();

	
	include("funksjoner.php");

	$bruker_data = check_login($con);


?>
include("db.inc.php");


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innlevering 8</title>
    <link rel="stylesheet" href="Main.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
        <body>
            <main>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <div id="minNavbar" class=navbar >
                

                <a href="index.php"><i class="fa fa-home"></i></a>
                <a href="logut.php">Log ut</a>



            </div>
           