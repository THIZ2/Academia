<?php
include("../config.php");


$sql="Delete from contact where id = '".$_REQUEST['id']."' ";
/*$sql="update contact set status=0 where id='".$_REQUEST['id']."' ";*/

if(mysqli_query($conn,$sql))
{
	
	header("location:admin_index.php#marks");
}

?>