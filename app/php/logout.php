<?php 	

session_start();
session_destroy();
	
include("php/functions.php");

redirect_to("../index.php");

?>