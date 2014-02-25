<?php session_start(); 
include('config.php')
include('functions.php');

$username = $_POST['username'];
$password = $_POST['password'];
	
if(empty($error)){
	$query = "SELECT * ";
	$query .= "FROM residents ";
	$query .= "WHERE username = '{$username}'";
	$query .= "AND password = '{$password}' ";
	$result_set = mysqli_query($con,$query);
	if(mysqli_num_rows($result_set) == 1){	
		$founduser= mysqli_fetch_array($result_set);
		$_SESSION['username'] = $founduser['username'];
		redirect_to("room.php");
	}else{
		echo "Incorrect Password";
	};
};
	
mysqli_close($con);

?>