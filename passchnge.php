<form method="POST">
enter your password</td><td><input type="text" name="password">
re-enter your password</td><td><input type="text" name="rpassword">
<input type="submit" value="submit" name="submit">
</form>
<?php
$p1=$_POST['password'];
$p2=$_POST['rpassword'];
if(isset($_POST['submit']))
{
	
if($p1!=$p2)
{	
echo '<br><br>'."re enter password";
exit();
}
else
{
$query="UPDATE LOGIN SET PASSWORD='$password' WHERE username='$username'";
$d=mysqli_query($q,$query);
if($d)
{
	echo "password updated succesfully";
	header('location:login.php');
}
}
}