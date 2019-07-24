<html><body><form method="POST">
<h1><i>FORGOT PASSWORD</i></h1>
<table>
<tr><td>enter your username</td><td><input type="text" name="username"></td></tr>
<tr><td>enter your firstname</td><td><input type="text" name="firstname"></td></tr>
<tr><td>enter your secondname</td><td><input type="text" name="secondname"></td></tr>
<tr><td>enter your registered mobile number</td><td><input type="text" name="number"></td></tr>
<tr><td><input type="submit" value="submit" name="submit"></td></tr>
</table>
</form>
<?php
require("connection.php");
error_reporting(0);
if(isset($_POST['submit']))
{
	
$username=$_POST['username'];
$firstname=$_POST['firstname'];
$secondname=$_POST['secondname'];
$number=$_POST['number'];
$query1="SELECT * FROM LOGIN WHERE username='$username' && firstname='$firstname' && secondname='$secondname' && number='$number'";
$data= mysqli_query($q,$query1);
$t= mysqli_num_rows($data);
echo $t."afgaf";
	
if($t==1)
{
	header('location:passchnge.php');
}else
{
	printf("invalid details please contact the support line for further deatils");
}
}
?>
</body>
</html>
