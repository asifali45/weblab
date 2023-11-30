<html>
<body>
<?php
require('mainconn.php');
if(isset($_POST['sub']))
{
$name=$_POST['name'];
$usename=$_POST['usename'];
$phno=$_POST['phno'];
$password=$_POST['password'];
$sql="insert into  loginpage(name,usename,phno,Password)values('$name','$usename','$phno','$password')";
$result=mysqli_query($conn,$sql);
if($result)
{
	echo "New records successfully created";
}
mysqli_close($conn);
}
else
{
?>
<form align="center" method="POST" action="">
<fieldset>
	<h1><u>Registration</u></h1>
	
	<label for="name">Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
	<input type="text" name="name" id="name"><br><br>

	<label for="un">Username:</label>
	<input type="text" name="usename" id="un"><br><br>

	<label for="pn">phno:</label>
	<input type="number" name="phno" id="pn" maxlength=10><br><br>

	
	<label for="pwd">password:</label>
	<input type="password" name="password" id="pwd"><br><br>

	<input type="submit" name="sub" id="sub" value="Submit">
	<input type="reset" name="rst" id="rst" value="Reset">
</fieldset>
<?php
}
?>
</form>
</body>
</html>