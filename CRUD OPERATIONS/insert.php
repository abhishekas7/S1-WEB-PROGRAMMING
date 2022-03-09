<?php
include 'con.php';
if(isset($_POST['submit']))
{
	$name=$_POST['carname'];
	$model=$_POST['carmodel'];
	$number=$_POST['carnumber'];
	$sql="INSERT INTO `cars` (`name`, `model`, `number`) VALUES ('$name', '$model', '$number')";
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
<input type="text" name="carname">
</td>
</tr>
<tr>
<td>
model
</td>
<td>
<input type="text" name="carmodel">
</td>
</tr>
<tr>
<td>
number
</td>
<td>
<input type="text" name="carnumber">
</td>
</tr>
<tr>
<td>
<input type="submit" name="submit">
</td>
</tr>
</table>
</form>

</body>
</html>