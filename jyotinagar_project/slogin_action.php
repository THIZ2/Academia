<?php session_start();
include("config.php");
 $email=$_REQUEST['email'];
 $password=md5($_REQUEST['password']); 
//md5($_REQUEST['password']);

 $sql="select * from sregistration where email='".$email."' and password='".$password."' ";
$run=mysqli_query($conn,$sql);


if($email=="" || $password=="")
{
	$_SESSION['lerror'][2]="Please Enter Email & Password";
	header("location:login.php");
}
else if($data=mysqli_fetch_array($run))
{
	$_SESSION['user_id']=$data['id']; 
	$_SESSION['user_name']=$data['name']; 
	header("location:sprofile.php");

}
else
{
	$_SESSION['lerror'][3]="Wrong email id or password";
	header("location:login.php");
}
?>