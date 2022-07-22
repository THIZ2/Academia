<?php 
session_start();
include("config.php");
$sql="Select * from tregistration where id='".$_SESSION['user_id']."' ";
$run=mysqli_query($conn,$sql);
$data=mysqli_fetch_array($run);

$table=strtolower($data['subject']);
echo $table;
$name=$_REQUEST['name'];
$month=$_REQUEST['month'];
$assign1=$_REQUEST['assign1'];
$assign2=$_REQUEST['assign2'];
$assign3=$_REQUEST['assign3'];
$internals=$_REQUEST['internals'];

$average=($assign1+$assign2+$assign3)/3;

$sql1="insert into $table(`name`,`month`,`assign1`,`assign2`,`assign3`,`internals`,`average`)values('".$name."','".$month."','".$assign1."','".$assign2."','".$assign3."','".$internals."','".$average."')";
	
	if(mysqli_query($conn,$sql1))
	header("location:tprofile.php");
else
	  echo mysqli_error($conn);


?>