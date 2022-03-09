<?php
$_SERVER="localhost";
$_USER="root";
$_PASSWORD="";
$_DATABASE="cars";
$con=mysqli_connect("$_SERVER","$_USER","$_PASSWORD","$_DATABASE");
if($con)
{
	echo("DATABASE CONNECTED");
}
else{
	echo("falied");
}
?>