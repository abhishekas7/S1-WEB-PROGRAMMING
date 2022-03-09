<?php
include 'con.php';
if(isset($_GET['delete_id']))
{
	$del_id=$_GET['delete_id'];
	$sql="DELETE FROM `cars` WHERE id='$del_id'";
	$result=$con->query($sql);
	if($result==TRUE)
	{
		header("location:read.php");
	}
	else
	{
		echo "nill";
	}
}

?>