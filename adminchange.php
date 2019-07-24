<?php
$value= $_GET['gett'];
require "connection.php";
?>
<html>
<body>
<form method="POST">
updated status :<input type="text" name="updatedstatus">
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>

<?php
if(isset($_POST['submit']))
{
	echo $value;
$updatedstatus=$_POST['updatedstatus'];
$query7 = "UPDATE ORDERS SET STATUS='$updatedstatus' WHERE ID='$value' ";
$data7= mysqli_query($q,$query7);
if(isset($data7))
header('location:adminpannel.php');
}
?>