<?php
require "connection.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign up Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
	
   


@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-color: whitesmoke;
font-family: 'Numans', sans-serif;
}

.container{
align-content: center;
}

.card{
height: 620px;
margin-top: auto;
margin-bottom: auto;
width: 450px;
background-color: white;
}



.card-header h3{
color: #333;
font-weight:bold;
}


.input-group-prepend span{
width: 50px;
background-color: rgb(10, 129, 240);
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: #333;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: rgb(10, 129, 240);
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: #333;
}

.links a{
margin-right: 1px;
}
</style>
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign Up</h3>
			</div>
			<div class="card-body">
				<form method="POST" action="">
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input  class="form-control" type="text" name="firstname" placeholder="enter first name" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input  class="form-control" type="text" name="secondname" placeholder="enter second name" required>
						
                    </div>
                    <div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input  class="form-control" type="text" name="username" placeholder="enter user name" required>
						
                    </div>
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                            </div>
                            <input class="form-control" type="password" name="p1" /*pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"*/ placeholder="min 8char(min 1number,1upper&1lowercase letter)" required >
                        </div> <!-- form-group// -->
                        <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                            </div>
                            <input class="form-control" type="password" name="p2" placeholder="re-enter password" required>
                        </div> <!-- form-group// -->                                      

                    <div class="form-group input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                             </div>
                            <input  class="form-control" type="text" name="emailid" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="enter email" required>
						</div> <!-- form-group// -->
						<div class="input-group form-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                            </div>
                            <input class="form-control"  type="date" name="dateofbirth" placeholder="enter dob" required> 
                        </div> <!-- form-group// -->
                          <div class="input-group form-group">
                        <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-key"></i> </span>
                            </div>
                            <input class="form-control"  type="tel" name="phonenumber" pattern="^\d{10}$" placeholder="enter 10 digit phonenumber" required> 
                     
					  </div> <!-- form-group// -->

                      
                        <div class="form-group input-group">
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary btn-block" value="Create Account" name="submit">
						
							<br>
                        </div> <!-- form-group// -->                     
						</form>

<h5>					Have an account?<a href="login.php">Sign In</a></h5>
				
			</div>
</div>
                    </div> <!-- card.// -->
                    
                    </div> 
					</div>
                    <!--container end.//-->
</body>
                    
            </html>        


<?php
$p1=$_POST['p1'];
$p2=$_POST['p2'];
if(isset($_POST['submit']))
{
	
if($p1!=$p2)
{	
echo '<br><br>'."re enter password";
exit();
}

else 
{
$username = $_POST['username'];
$password=$_POST["p1"];
$firstname=$_POST["firstname"];
$secondname=$_POST["secondname"];
$emailid=$_POST["emailid"];
$phonenumber=$_POST["phonenumber"];
$dateofbirth=$_POST["dateofbirth"];
$query2="SELECT * FROM LOGIN WHERE username='$username' ";
$data2=mysqli_query($q,$query2);
$a = mysqli_num_rows($data2);

if($a==0)
{
$query = "INSERT INTO LOGIN VALUES ('','$username','$password','$firstname','$secondname','$emailid','$phonenumber','$dateofbirth')";
$data1=mysqli_query($q,$query);
	session_start();
	$_SESSION['user']=$a;
	session_write_close(); 	
header("location: Interior Era.php");
echo "created succesfully";
}
else
{
	echo "username already taken try other one";
}
	
}
}
?>




