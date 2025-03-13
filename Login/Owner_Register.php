<?php
$con=mysqli_connect('localhost','root','','house_rent');

if(isset($_POST['btn_register']))
	{
		$name=$_POST['name'];
		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$conpass=$_POST['conpass'];
		$phono_no=$_POST['phono_no'];
		$address=$_POST['address'];
		$id_type=$_POST['id_type'];
		$filename=$_FILES['image']['name'];
		$filetype=$_FILES['image']['type'];
		$filetmp=$_FILES['image']['tmp_name'];
		$filesize=$_FILES['image']['size'];
		$folder="image/".$filename;
		
		if(move_uploaded_file($filetmp,$folder))
		{
			$sql="insert into owner('full_name','email','password',phono_no','address','id_type','id_photo')values('$name','$email','$pass','$phono_no','$address','$id_type','$filename')";
			if(mysqli_query($con,$sql))
			{
				header('location:Owner_Login.php');
			}
			else
			{
				header('location:Owner_Login.php');
			}
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
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form enctype="multipart/form-data">
					
					<label for="chk" aria-hidden="true"><i class="fas fa-user-tie"></i><i>Owner Registration</i></label>
					<input type="text" name="name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pass" placeholder="Password" required="">
					<input type="password" name="conpass" placeholder="Confirm Password" required="">
					<input type="text" name="phone_no" placeholder="Phone no" required="">
					<input type="text" name="address" placeholder="Address" required="">
					<select name="id_type" required>
						<option class="option">Type of ID</option>
						<option class="option">Citizenship</option>
						<option>Driving Licence</option>
					</select>
					<input type="file" name="image" placeholder="Upload Photo" required="">
					<button name="btn_register">Sign up</button>
					<p align="center" font-color="white" >Register as a <a href="Tenant_Register.php">Tenant?</a></p>
				</form>
			</div>

			<div class="login">
				<form>
					<label for="chk" aria-hidden="true" style="padding:10px";><i class="fas fa-user-tie"></i><i>Owner Login</i></label>
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="password" placeholder="Password" required="">
					<button name="login_btn">Login</button>
					
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
