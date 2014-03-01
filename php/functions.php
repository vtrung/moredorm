<?php
include("config.php");

// ----------------------------- Test Functions -------------------
$functioncheck = "checked";

function stachange(){
	$_SESSION['status']= $_POST['change'];
};

// ---------------------------- End Test Functions ----------------


function testphp($arg1){
	if(!isset($arg1)) {
		echo 'not attached';
		} else {
		echo $arg1;
		}
};


function redirect_to( $location = NULL ){
	if ($location != NULL){
		header("Location: {$location}");
		exit;
	}
};


function login($username,$password){
	$loginfail = 'initiated';
	$con = mysqli_connect("localhost","vtrujjct_ving","spacebug1","vtrujjct_data");
	if(empty($error)){
		$query = "SELECT * FROM residents WHERE username = '" . $username . "' AND password = '" . $password . "'";
		$result = mysqli_query($con,$query);
		$rowcount = mysqli_num_rows($result);
		if($rowcount == 1 && $username!= NULL){	
			$_SESSION['status'] = 100;
			$founduser= mysqli_fetch_array($result);
			$_SESSION['username'] = $founduser['username'];
			$loginfail = 'success';
			redirect_to("room.php");
		}else{
			$_SESSION['status'] = 200;
			$loginfail = 'fail';
		}
	}
};

//LOGGING OUT
function logout(){
	redirect_to("index.php");
	session_destroy(); 		//end current session
	$_SESSION['status'] = 300;
};


	

/*if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf("Result set has %d rows.\n",$rowcount);
  // Free result set
  mysqli_free_result($result);
  }
*/