<?php 
include("config.php");

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$sql="insert into contact(`name`,`email`,`message`)values('".$name."','".$email."','".$message."')";
	
	if(mysqli_query($conn,$sql))
	header("location:home.php");
else
	  echo " mysqli_error($conn)";
?>