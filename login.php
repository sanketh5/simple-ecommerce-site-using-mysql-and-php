<?php
require("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
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
    /* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-color: whitesmoke;
font-family: 'Numans', sans-serif;
}

.container{
align-content: center;
}

.card{
height: 350px;
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
				<h3>Sign In</h3>
			</div>
			<div class="card-body">
				<form method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" class="form-control" placeholder="username" name="usernameentered" required>
						
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="passwordentered" required>
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
                    	<div class="form-group">
						<input type="submit" value="Login" name="submit" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="signup.php">Sign Up</a>
					<br>forgot password<a href="forgotpassword.php">change password</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>



<?php
if(isset($_POST['submit']))
{
$a=$_POST["usernameentered"];
$b=$_POST["passwordentered"];
$query1="SELECT * FROM LOGIN WHERE username='$a' && password='$b'";
$data1= mysqli_query($q,$query1);
$t= mysqli_num_rows($data1);

if($t==1)
{
	session_start();
	$_SESSION['user']=$a;
	session_write_close(); 	
	header('location:index.php');
}
else
	echo "enter correct user name";

}?>
