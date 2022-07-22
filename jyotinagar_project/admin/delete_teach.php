<?php
include("../config.php");

$sql="update tregistration set status=0 where id='".$_REQUEST['id']."' ";
if(mysqli_query($conn,$sql))
{
	
	header("location:admin_index.php");
}

?>