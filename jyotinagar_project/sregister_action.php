<?php 
session_start();
include("config.php");

$name=$_REQUEST['name'];
if($name=="")
{
	$_SESSION['error'][10]="Please Enter Full Name";
}

$email=$_REQUEST['email'];
if($email=="")
{
	$_SESSION['error'][11]="Please Enter Email";

}
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
{
	$_SESSION['error'][12] = "Invalid email format";

}

$year=$_REQUEST['year'];
if($year=="Year")
{
	$_SESSION['error'][13]="Please Enter The subject you teach.";
}
$password = $_REQUEST['password'];
$uppercase = preg_match('@[A-Z]@', $password);
	$lowercase = preg_match('@[a-z]@', $password);
	$number = preg_match('@[0-9]@', $password);
	$specialChars = preg_match('@[^\w]@', $password);

if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8)
{
	$_SESSION['error'][14]= 'Password should be at least 8 characters in length and should include at
	least one upper case letter, one lower case letter, one number, and one special character.';
}

$con_password = $_REQUEST['con_password'];
if($con_password!=$password)
{
	$_SESSION['error'][15]="The Password does not match .";
}

if(isset($_FILES['image']) and ($_FILES['image']!=""))
{
$file_name = $_FILES['image']['name'];
	$file_size =$_FILES['image']['size'];
	$file_tmp =$_FILES['image']['tmp_name'];
	$file_type=$_FILES['image']['type'];
	$file_ext=strtolower(end(explode('.',$file_name)));
	//$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
	$extensions= array("jpeg","jpg","png");
	
	if(in_array($file_ext,$extensions)===false)
	{
		$_SESSION['error'][17]="Extension not allowed, please choose a JPEG or PNG file.";
	}
	else
	{
		move_uploaded_file($file_tmp,"register_img/".$file_name); 
	}
}
else
{
	$_SESSION['error'][16]=" Upload Image";
}

if(!empty($_SESSION['error']))
{
	//echo "error";
	header("location:register.php#contact");
}
else
{
$sql="insert into sregistration(`name`,`email`,`year`,`password`,`image`)values('".$name."','".$email."','".$year."','".md5($password)."','".$file_name."')";
	
	if(mysqli_query($conn,$sql))
	header("location:home.php");
else
	  echo mysqli_error($conn);
}
?>