<?php 	session_start();
	session_destroy();
	
include("includes/functions.php");

redirect_to("index.php");

?>