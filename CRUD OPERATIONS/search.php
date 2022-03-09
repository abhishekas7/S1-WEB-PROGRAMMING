<?php
include 'con.php';
if(isset($_POST['submit']))
{
	$name=$_POST['carname'];
	$sql="select * from cars where name='$name'";
	$res=$con->query($sql);
	{
		while($row=$res->fetch_assoc())
		{
			$id= $row['id'];
			$name=$row['name'];
			$model=$row['model'];
			$number=$row['number'];		
?>
<table border="1"><tr><th>sino</th><th>title</th><th>author</th><th>edition</th></tr>
<tr><td><?php echo $id;?></td>
<td><?php echo $name;?></td>
<td><?php echo $model;?></td>
<td><?php echo $number;?></td>


<?php
}
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
enter the name
</td>
<td>
<input type="text" name="carname">
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