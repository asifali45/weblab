<html>
<head><title>User Login</title></head>
<body bgcolor="yellow">
<?php
require('mainconn.php');
if(isset($_POST['submit']))
{
$uname=$_POST['uname'];
$pass=$_POST['pass'];
$sql="select * from loginpage where usename='$uname' and password='$pass'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo"SUCCESS";
}
else
{
echo"login failed";
}
mysqli_close($conn);
}
else
{

?>

<form action="" method="POST">
<table align="center" style="margin-top:200">
 <tr><td><b><label>USERNAME:</label></b></td><td><input type="text"name="uname"></td></tr>
 <tr><td><b><label>PASSWORD:</label></b></td><td><input type="password"name="pass"></td></tr>
 <tr><td colspan="2" align="center"><input type="submit" name="submit"></td></tr>
 <tr><td colspan="2" align="center">New User<input type="submit" value="register"></td></tr>
</table>
<?php
}
?>
</form>
</body>
</html>