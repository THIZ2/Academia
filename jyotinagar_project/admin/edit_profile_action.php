<?php 
include("../config.php");

$name=$_REQUEST['name'];
if($name=="")
{
	$_SESSION['error'][0]="Please Enter First Name";
}
$email=$_REQUEST['email'];
if($email=="")
{
	$_SESSION['error'][1]="Please Enter Email";

}
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$_SESSION['error'][2] = "Invalid email format";

}
$subject=$_REQUEST['subject'];
if($subject=="Subject")
{
	$_SESSION['error'][3]="Please Enter The subject you teach.";
}
$password = $_REQUEST['password'];
$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
{
	$_SESSION['error'][4]= 'Password should be at least 8 characters in length and should include at
	least one upper case letter, one lower case letter, one number, and one special character.';
}

$_FILES['image']; 
//$_REQUEST['image'];

if($_FILES['image']!="")
{
	$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	
		move_uploaded_file($file_tmp,"../register_img/".$file_name); 
		$sql="update registration set image='".$file_name."' where id='".$_REQUEST['id']."' " ; 
	 mysqli_query($conn,$sql);
	
}
else
{
	$_SESSION['error'][6]=" Upload Image";
}

if(!empty($_SESSION['error']))
{
		header("location:edit_profile.php");
}
else
{
	$sql="update tregistration set name='".$name."', email='".$email."', subject='".$subject."' where id='".$_REQUEST['id']."' " ;

	if(mysqli_query($conn,$sql))
	header("location:admin_index.php");
else
	  echo mysqli_error($conn);
	
}

?>