<html>
<body>
<h1>admin pannel</h1>
<?php 
error_reporting(0);
$r=$_GET['h'];
require "password.php"; 
require "connection.php";
if($tt==1)
{
?>
<table>
<tr><th>name</th><th>orderstyle</th><th>email</th><th>phonenumber</th><th>status</th></tr>
<?php
$query5="SELECT * FROM ORDERS ";
$data5=mysqli_query($q,$query5);
echo $count;
while($r5=mysqli_fetch_assoc($data5))
{
	$a = $r5['name'];
	$b = $r5['orderstyle'];
	$c = $r5['email'];
	$d = $r5['phonenumber'];
	$e = $r5['id'];
	$f = $r5['status'];
	
?>

<tr><td><?php echo $a; ?></td><td><?php echo $b; ?></td><td><?php echo $c; ?></td><td><?php echo $d; ?></td>
<td>
<a href="adminchange.php?gett=<?php echo $e; ?>"> <input type='text' placeholder="<?php echo $f; ?>"> </a>
<?php
}
}
?>
</body>
</html>