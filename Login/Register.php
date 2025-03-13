<?php
$con = new mysqli('localhost', 'root', '', 'house_rent');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST['register_btn'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conpass = $_POST['conpass'];
    $contact = $_POST['phone_no'];
    $address = $_POST['address'];
    $type_id = $_POST['id_type'];
    $user_type = "tenant";
    $filename = $_FILES['image']['name'];
    $filetmp = $_FILES['image']['tmp_name'];
    $filename1 = $_FILES['image1']['name'];
    $filetmp1 = $_FILES['image1']['tmp_name'];
    $folder = "image/" . $filename;
    $folder1 = "image/" . $filename1;

    $sql = "SELECT count(id) FROM register WHERE email=? AND user_type='tenant'";
    $stmt = $con->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($count);
    $stmt->fetch();
    $stmt->close();

    if($count[0]=='1')
		{
			echo "<script>alert('You Have Already Registered')</script>";
		}
		else
		{
			if($conpass==$pass)
			{
				if(move_uploaded_file($filetmp,$folder))
				{
					$sql1="insert into register(img,name,email,password,contact,address,type_id,photo,user_type)values('$filename1','$name','$email','$pass','$contact','$address','$filename','$type_id','$user_type')";
					if(mysqli_query($con,$sql1))
					{
						echo"<script>alert('Email sent')</script>";
						header('location:Tenant_Login.php');
					}
					else
					{
						echo "<script>alert('An Error to Register')</script>";
					}
				}
			}
		}
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'tukaramachugatla@gmail.com';  // replace with your email
        $mail->Password = 'rfzbnoeywjbwypie';  // replace with your email password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        $mail->setFrom('tukaramachugatla@gmail.com', 'Tukaram Achugatla');  // replace with your email and name
        $mail->addAddress($email);
        $mail->addReplyTo('tukaramachugatla@gmail.com', 'Tukaram Achugatla');

        $mail->isHTML(true);
        $mail->Subject = 'Username and Password Sent';
        $mail->Body = "Email ID: $email<br>Password: $pass";
        $mail->AltBody = "Email ID: $email\nPassword: $pass";

        $mail->send();
        echo "<script>alert('Message has been sent');</script>";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./style.css">
</head>
<body>

	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" enctype="multipart/form-data">
					
					<label for="chk" aria-hidden="true"><i class="fas fa-user"></i><i>Tenant Registration</i></label>
					<input type="text" name="name" placeholder="User name" required="">
					<input type="email" name="email" placeholder="Email" required="">
					<input type="password" name="pass" placeholder="Password" required="">
					<input type="password" name="conpass" placeholder=" Confirm Password" required="">
					<input type="text" name="phone_no" placeholder="Phone no" required="">
					<input type="text" name="address" placeholder="Address" required="">
					<input type="file" name="image" placeholder="Upload User Photo" required="">
					<select name="id_type" required>
						<option class="option">Type of ID</option>
						<option class="option">Citizenship</option>
						<option>Driving Licence</option>
					</select>
					<input type="file" name="image1" placeholder="Upload ID Photo" required="">
					<button name="register_btn">Sign up</button>
					<p align="center" font-color="white" >Already Register <a href="Tenant_Login.php">Login?</a></p>
				</form>
			</div>

	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
