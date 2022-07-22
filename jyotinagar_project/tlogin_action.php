<?php session_start();
include("config.php");
 $email=$_REQUEST['email'];
 $password=md5($_REQUEST['password']); 
//md5($_REQUEST['password']);

 $sql="select * from tregistration where email='".$email."' and password='".$password."' ";
$run=mysqli_query($conn,$sql);


if($email=="" || $password=="")
{
	$_SESSION['lerror'][0]="Please Enter Email & Password";
	header("location:login.php");
}
else if($data=mysqli_fetch_array($run))
{
	$_SESSION['user_id']=$data['id']; 
	$_SESSION['user_name']=$data['name']; 
	header("location:tprofile.php");

}
else
{
	$_SESSION['lerror'][1]="Wrong email id or password";
	header("location:login.php");
}
?>