<?php session_start(); 
include("config.php");
include("functions.php");

  		
$sql = "INSERT INTO residents (username, firstname, lastname, email, password, birthdate)
  	VALUES ('$_POST[username]', '$_POST[firstname]', '$_POST[lastname]', '$_POST[email]', '$_POST[password]', '$_POST[age]')";
  		
if (!mysqli_query($con,$sql))
 	{
 	if(mysqli_errno($con) == 1062){
 	die('This username has already been taken.');
 	}else{
 	die('Error: '.mysqli_error($con)." Error number: " . mysqli_errno($con));
 	};
 	};

header('Location:index.php');	

mysqli_close($con);

?>