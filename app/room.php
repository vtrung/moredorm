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

<div class="box draggable">
	<img src="images/mLogo.png">
</div>

<div id='main'>
	<div id='rwelcome1' class="box draggable">
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

<div id='title1' class="box draggable">
<h1> This is the members page </h1>
</div>


<form class="box draggable" id="logout" method="post" action="php/logout.php">
<input type="submit" value="LOGOUT" action="php/logout.php">
</form>

<div id="board" class="box draggable">
	<div>
	<img src="upload/ftoast.jpg">
	</div>
</div>

<form action="uploadfile.php" method="post" enctype="multipart/form-data" class="box draggable">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

<div id="retcookie" class="box"> 

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