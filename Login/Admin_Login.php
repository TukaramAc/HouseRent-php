<?php
session_start();
	$user="";
	if(isset($_SESSION['email']))
	{
		$user=$_SESSION['email'];
	}
$con=mysqli_connect('localhost','root','','house_rent');
$sql1="select * from register where user_type='admin'";
$res1=mysqli_query($con,$sql1);
$rw1=mysqli_fetch_row($res1);

if(isset($_POST['login_btn']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	if($email==$rw1[3] and $password==$rw1[4])
	{
		$_SESSION['email']=$email;
	    header('location:../Admin/Admin-index1.php');
	}
	else
	{
		echo "<script>alert('Invalide Username or Password')</script>";
	}
}
?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body>
	<div class="main" style="width:400px;height:550px;">  
			<div class="signup" style="width:400px;height:15px;transform: translateY(10px);">
				<form>
					<label><i class="fas fa-user-cog"></i></label>
				</form>
			</div>
	
			<div class="login" style="width:400px;height:550px;transform: translateY(10px);">
				<form method="post">
					<label></i><i>Admin Login</i></label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button type="submit" name="login_btn">Login</button>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
