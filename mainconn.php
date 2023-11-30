<?php
$servername="localhost";
$username="root";
$password="";
$dbname="asifali";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
	die("couldn't connect MY SQL".mysqli_connect_error());
}
else
{
	echo("Database connected succesfully");
}
?>