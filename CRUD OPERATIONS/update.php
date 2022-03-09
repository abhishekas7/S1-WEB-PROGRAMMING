<?php
include 'con.php';
if(isset($_POST['update']))
{
	$upid=$_POST['user_id'];
	$name=$_POST['carname'];
	$model=$_POST['carmodel'];
	$number=$_POST['carnumber'];
	$sql="update cars set name='$name' , model = '$model', number = '$number' WHERE id= $upid";
	$res=$con->query($sql);
	if($res==TRUE)
	{
		header("location:read.php");
	}
	else
	{
		echo "not";
	}
}


?>


<?php

if(isset($_GET['upda_id']))
{
	$upid=$_GET['upda_id'];
	$sql="select * from cars where id='$upid'";
	$result=$con->query($sql);
	if($result->num_rows>0)
	{
		while($row=$result->fetch_assoc())
		{
			$id= $row['id'];
			$name=$row['name'];
			$model=$row['model'];
			$number=$row['number'];
		}
?>




<html>
<title>
<html>
<head>
</head>
</title>
<body>
<form method="post">
<table>
<tr>
<td>
name
</td>
<td>
<input type="text" name="carname" value='<?php echo $name;?>'>
</td>
</tr>
<tr>
<td>
model
</td>
<td>
<input type="text" name="carmodel" value='<?php echo $model ?>'>
</td>
</tr>
<tr>
<td>
number
</td>
<td>
<input type="text" name="carnumber" value='<?php echo $number ?>'>
</td>
</tr>
<tr>
<td>
<input type="submit" name="update" value="UPDATE">
</td>
<td>
<input type="hidden" name="user_id" value='<?php echo $id; ?>'>
</td>
</tr>
</table>
</form>
</body>
</html>

<?php
	}
else{
	echo "updated";
}

}
?>
