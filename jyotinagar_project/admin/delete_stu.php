<?php
include("../config.php");

$sql="update sregistration set status=0 where name='".$_REQUEST['name']."' ";

if(mysqli_query($conn,$sql))
{
	
	header("location:admin_index.php");
}


?>