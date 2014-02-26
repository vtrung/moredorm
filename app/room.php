<?php 
session_start();
?>

<?php
include("php/config.php");
include("php/functions.php");
include("php/controls.php");

if(!isset($_SESSION['username']) || $_SESSION['status']!= 100){
	redirect_to("index.php");
}; 
?>

<!doctype html>
<head profile="http://www.moredorm.com" lang="en">
	<meta charset ="utf-8">
	<link rel="icon" href="http://www.moredorm.com/images/favicon1.png" type="image/png" />
	<link href="css/main.css" rel="stylesheet">
	<title> moredorm </title>
	<script src="js/jquery.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
</head>

<body>

<div id='toolbar' class='toolbarfill draggable'>

		<form class="login toollist box" id="login" method="post">
		<p> Login </p>
		<div class="toollist">
		<div class="toollist">Username: <input type="text" name="username"></div>
		<div class="toollist">Password: <input type="password" name="password"</div>
		</div>
		<div class="toollist">
		<input type="submit" name="login" class="login toollist">
		</div>
		</div>
		</form>
	<div>
		<?php
		
			if($_SESSION['status'] == 200){
				echo("UsernamePassword is Invalid");
			}
		?>
	</div>
</div>

<div id="head0">
	<div id="logo1">
	<a href="http://moredorm.com" id="hlink1" ><img src="images/md2.png"></a>
	</div>
	<div id="headspace">
	</div>
	<p id="head1">
	</p>
</div>

<div id='main'>
	<div id='rwelcome1'>
	<?php 
	$results = mysqli_query($con,"SELECT * FROM residents WHERE username='{$_SESSION['username']}'");
	
	while($row = mysqli_fetch_array($results))
	  {
	  echo 'Welcome Back, '. ucfirst($row['firstname']) .'!';
	  echo "<br>";
	  };
	  
	 echo "Username: ".$_SESSION['username'];
	?>
	</div>

<div id='title1'>
<h1> This is the members page </h1>
</div>


//<form id="logout" method="post">
<button onclick="location.href='logout.php'">Logout</button>
//</form>

<div id="board">
	<div class="draggable">
	<img src="upload/ftoast.jpg">
	</div>
</div>

<form action="uploadfile.php" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

<div id="retcookie"> 

<?php
if(isset($_COOKIE["file"])){
echo "successfully uploaded ". $_COOKIE['file'];
}
?>

</div>
</div>
<script>
  $(function() {
    $( ".draggable" ).draggable();
  });
</script>
</body>

</html>