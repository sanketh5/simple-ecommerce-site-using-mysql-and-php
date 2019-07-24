<?php

$value= $_GET['value'];
error_reporting(0);
include "connection.php";
$query4="SELECT * FROM IMAGES WHERE value='$value' ";
$data4=mysqli_query($q,$query4);
?>
<html>
<head>
<title>interior era</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="styleint.css" rel="stylesheet" type="text/css" >
<script src="main.js"></script>


</head>
<body>
<?php 
error_reporting(0);
session_start();
 $r=$_SESSION['user']; 
 ?>
<?php 
if(isset($r))
{
	?>

<div class="navbar">
<a class="active"href="#"><i class="fa fa-fw fa-search"></i> Status</a>
  <a href="contact_page.php"><i class="fa fa-fw fa-envelope"></i> Support</a>
  <a href="logout.php"><i class="fa fa-fw fa-user"></i> logout</a>
  <img src="images\logo.png" alt="">
</div>
<center><i><h1><?php
	echo "Hello  ".$r;
	session_write_close(); 	?></h1></i></center>	
	
<?php 
}
else
{ 
?>
<div class="navbar">
<a class="active"href="#"><i class="fa fa-fw fa-search"></i> Status</a>
  <a href="contact_page.php"><i class="fa fa-fw fa-envelope"></i> Support</a>
  <a href="login.php"><i class="fa fa-fw fa-user"></i> Signin/Signup</a>
  <img src="images\logo.png" alt="">
</div>
	<?php 
	}
	?>

<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="styleint.css" rel="stylesheet" type="text/css" >
<script src="main.js"></script>
</head>
<body>
<h1> <i> INTERIOR ERA</i></h1>

<div class="row">
<?php
while($r4= mysqli_fetch_assoc($data4))
{
$a="images1/".$r4['filename'];
$b=$r4['name'];
$c=$r4['description'];
$d=$r4['prize'];
?>
<a href="picspage.php?picno=<?php echo $value; ?>&name=<?php echo "$b";?>" class="btn btn-primary">
<div class="column">
<div class="card" style="width: 18rem;">
  <img src="<?php echo"$a"?>" class="card-img-top" alt="..." height="300pxs" width="400pxs">
  <div class="card-body">
    <h5 class="card-title"><?php echo"$b"?></h5>
    <p class="card-text"><?php echo"$c"?><br><?php echo"$d"."rs";?></p>
	
    </a>
  </div>
</div>
</div>
<?php
}
?>
</div>

</body>
</html>