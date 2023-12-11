<html>
<body>
<?php
require('mainconn.php');
$sql="select * from library";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo"BOOK NAME: ".$row["book_name"];
		echo"AUTHOR: ".$row["author"];
		echo"PUBLISHER: ".$row["publisher"];
		echo"QUANTITY: ".$row["quantity"];
		echo"PRICE: ".$row["price"];
	}
}
else
{
	echo"NO RESULT";
}
mysqli_close($conn);
?>
</body>
</html>