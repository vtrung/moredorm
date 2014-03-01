<?php
include("config.php");
if(!isset($_SESSION['status'])){
	$_SESSION['status'] = 0;
	}; 

$controlcheck = "check";	//checking variable

if(isset($_SESSION['status'])){
	$sesstatus = $_SESSION['status'];
};

if(isset($_POST['login'])){
	unset($_POST['login']);
	login($_POST['username'],$_POST['password']);	
};

if(isset($_POST['logout'])){
	unset($_POST['logout']);
	logout();
};