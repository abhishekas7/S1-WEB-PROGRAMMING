<?php
include "con.php";
$sql = " SELECT * FROM `cars` " ;
$result=$con->query($sql);
?>
<html>
<head>
<title>
</title>
</head>
<body>
<a href="insert.php"><button style="margin:15px; background-color:yellow; color:black; padding:12px; border-radius:20px;">ADD cars</button></a>
<table border="1" cellpadding="15px">
<tr>
<th>id</th>
<th>name</th>
<th>model</th>
<th>number</th>
<th colspan="2"></th>
</tr>
<?php
if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
	?>
	<tr>
<td><?php echo($row['id']); ?></td>
<td><?php echo($row['name']); ?></td>
<td><?php echo($row['model']); ?></td>
<td><?php echo($row['number']); ?></td>
<td><a href="update.php?upda_id=<?php echo $row['id'];?>"><button>update</button></a></td>
<td><a href="delete.php?delete_id=<?php echo $row['id'] ?>"><button>DELETE</button></a></td>
</tr>
	<?php
}
}
?>
</table>
</body>
</html>
