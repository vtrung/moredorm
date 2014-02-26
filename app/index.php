<?php session_start();
include("php/config.php");
include("php/functions.php");
include("php/controls.php");
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

<div id='toolbar' class='toolbarfill'>

		<form class="login toollist box draggable" id="login" method="post">
		<p> Login </p>
		<div class="toollist">
			<div class="toollist">Username: <input type="text" name="username"></div>
			<div class="toollist">Password: <input type="password" name="password"</div>
		</div>
		<div class="toollist">
			<input type="submit" name="login" class="login toollist">
		</div>
		</form>
</div>


<div id="mainbody">
	<div id="panel1" class="shadow">
	<p><?php include("includes/signupform.php"); ?> </p>
	</div>
	<div id="panel2" class="shadow">
	<h1> Stay connected with your new classmates! </h1>
	<p> Ving Make new friends! </p>
	<p> Bringing the Dorm experience to everyone! </p>
	</div>
	<?php 
	if (mysqli_connect_errno($con))
	  {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }else{
	  echo "Connected";
	  };
  	?>
	
</div>	

<div id="bottomfooter" class="draggable">
	<ul>
	<li>about us</li>
	<li>contact us</li>
	</ul>	
</div>

<div id="board">
	<div class="draggable">
	<img src="upload/ftoast.jpg">
	</div>
</div>

<script>
  $(function() {
    $( ".draggable" ).draggable();
  });
</script>


</body>
</html>



	