<?php 

session_start();
 $r=$_SESSION['user']; 
 ?>
<?php
if(isset($r))
{
	?>

<h1><b>Order placed successfully<b/></h1>

<?php
require "connection.php";
error_reporting(0);

$name=$_GET['user'];
$orderstyle=$_GET['name'];
$query6="SELECT * FROM LOGIN WHERE username='$name'";
$data6=mysqli_query($q,$query6);
while($r6= mysqli_fetch_assoc($data6))
{
$email=$r6['emailid'];
$phonenumber=$r6['phonenumber'];
}
$query7="INSERT INTO ORDERS VALUES('','$name','$orderstyle','$email','$phonenumber','just placed')";
$data7=mysqli_query($q,$query7);

$query8="SELECT * FROM ORDERS WHERE name='$name'";
$data8=mysqli_query($q,$query8);
while($r8= mysqli_fetch_assoc($data8))
{
$id=$r8['id'];
}
echo "your order no is ".$id." please note it for further details";
}
else
{
header('location:login.php');
}	
?>
<a href="index.php"><h2> HOME </h2></a>
