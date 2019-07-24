<?php
error_reporting(0);
$value= $_GET['picno'];
$name= $_GET['name'];

include "connection.php";
$query5="SELECT * FROM IMAGES WHERE value='$value' && name='$name' ";
$data5=mysqli_query($q,$query5);
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
  <title>Project page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
</head>
<body>

<?php
while($r5= mysqli_fetch_assoc($data5))
{
$a="images1/".$r5['pic1'];
$b="images1/".$r5['pic2'];
$c="images1/".$r5['pic3'];
$d="images1/".$r5['pic4'];
$e=$r5['maindescription'];
}
?>
<div class="slideshow-container">

<div class="mySlides">

  <img src="<?php echo $a;?>" style="width:900px;height:400px">

</div>
<div class="mySlides">

  <img src="<?php echo $b;?>" style="width:900px;height:400px">

</div>

<div class="mySlides">

  <img src="<?php echo $c;?>" style="width:900px;height:400px">

</div>
<div class="mySlides">

  <img src="<?php echo $d;?>" style="width:900px;height:400px">

</div>



<br><br>

<div style="text-align:center">
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  <span class="dot"></span>
  
</div>


<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script><br>
	  
	  
	  <br><br><b><h1><?php echo $e ; ?></h1></b><br>
	 <a href="bought.php?name=<?php echo "$name"; ?>&user=<?php echo "$r"; ?>"><input type="button" value="BUY" class="btn btn-primary btn-block"></a><br><br><br><br><br>
 </body>
 </html>
 
 