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
	
include("includes/headsc.php"); ?>

<body>

<?php
include("includes/toolbar.php");
include("includes/header1.php"); 
?>

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
