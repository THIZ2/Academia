<?php session_start();
include("../config.php");


 $user_name=$_REQUEST['user_name'];
 $password=($_REQUEST['password']); 
 $sql="select * from admin where user_name='".$user_name."' and password='".$password."' ";
$run=mysqli_query($conn,$sql);


if($data=mysqli_fetch_array($run))
{
		$_SESSION['admin_id']=$data['id'];
		$_SESSION['admin_name']=$data['user_name'];
		header("location:admin_index.php");
}
else
{
	$_SESSION['error'][0]="Wrong username or password";
	header("location:admin_login.php");
}

?>