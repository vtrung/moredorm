<?php session_start();
include("php/config.php");
include("php/functions.php");
include("php/controls.php");
include("includes/headsc.php");
?>

<body>
<?php include("includes/toolbar.php"); ?>

<div id='main'>
<?php 	// include("includes/header1.php"); 
	//include("includes/troubleshoot.php"); ?>
<div id="mainbody" class="draggable">
	<div id="panel1" class="shadow">
	<p><?php include("includes/signupform.php"); ?> </p>
	</div>
	<div id="panel2" class="shadow">
	<h1> Stay connected with your new classmates! </h1>
	<p> Make new friends! </p>
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

<div id="bottomfooter">
	<ul>
	<li>about us</li>
	<li>contact us</li>
	</ul>	
</div>
</div>


<script src="js/script.js"></script>
<script 

$(function() {
    $( "#draggable" ).draggable();
});
	
/script>

</body>
</html>



	