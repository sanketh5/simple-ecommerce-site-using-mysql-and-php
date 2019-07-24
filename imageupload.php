
<?php 
error_reporting(0);
	require "password.php";
?>
<?php
if($tt==1)
{
	?>


<?php
include "connection.php";
?>

<html>
<head>
<title>upload pics</title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<h1>IMAGES</h1>
<b>CHOOSE MAIN IMAGE :</b><br><br><input type="file" name="f" required>
<b><br><br>VALUE:<input type="text" name="value" required></b>
<b><br><br>FILE NAME:<input type="text" name="name" required></b>
<b><br><br>DESCRIPTION:<input type="text" name="description" required></b>
<b><br><br>PRIZE:<input type="text" name="prize" required></b><br><br>
<b><br><br>MAIN DESCRIPTION:<input type="text" name="maindescription" required></b><br><br>
<b>CHOOSE IMAGE1 :</b><br><br><input type="file" name="f1" required><br>
<b>CHOOSE IMAGE2 :</b><br><br><input type="file" name="f2" required><br>
<b>CHOOSE IMAGE3 :</b><br><br><input type="file" name="f3" required><br>
<b>CHOOSE IMAGE4 :</b><br><br><input type="file" name="f4" required><br><br>
<input type="submit" value="submit" name="submit">
</form>
</body>
</html>
<?php
error_reporting(0);

if(isset($_POST["submit"]))
{
	
$filename=$_FILES["f"]["name"];
$tempname=$_FILES["f"]["tmp_name"];
$value=$_POST["value"];
$name=$_POST["name"];
$description=$_POST["description"];
$prize=$_POST["prize"];
$maindescription=$_POST["maindescription"];

$filename1=$_FILES["f1"]["name"];
$tempname1=$_FILES["f1"]["tmp_name"];
$filename2=$_FILES["f2"]["name"];
$tempname2=$_FILES["f2"]["tmp_name"];
$filename3=$_FILES["f3"]["name"];
$tempname3=$_FILES["f3"]["tmp_name"];
$filename4=$_FILES["f4"]["name"];
$tempname4=$_FILES["f4"]["tmp_name"];


$folder="images1/".$filename;
echo "$folder";

$folder1="images1/".$filename1;
echo "$folder1";
$folder2="images1/".$filename2;
echo "$folder2";
$folder3="images1/".$filename3;
echo "$folder3";
$folder4="images1/".$filename4;
echo "$folder4";

move_uploaded_file($tempname,$folder);

move_uploaded_file($tempname1,$folder1);
move_uploaded_file($tempname2,$folder2);
move_uploaded_file($tempname3,$folder3);
move_uploaded_file($tempname4,$folder4);

$query2="INSERT INTO IMAGES VALUES('','$value','$filename','$name','$description','$prize','$maindescription','$filename1','$filename2','$filename3','$filename4')";
$data2=mysqli_query($q,$query2);
if(isset($data2))
	echo "";
else
	echo "data not inserted";
}
?>
<?php
}
else
{
	echo "admin area restricted";
}
?>