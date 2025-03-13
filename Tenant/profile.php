<?php
session_start();
	$user="";
	if(isset($_SESSION['email']))
	{
		$user=$_SESSION['email'];
	}
include("navbar.php");
$con=mysqli_connect('localhost','root','','house_rent');
$sql1="select * from register where email='$user'";
$res1=mysqli_query($con,$sql1);
$rw1=mysqli_fetch_row($res1);
?>
<style>
#prodiv{
	height:200px;
	width:50%;
	background-color:powder-blue;
}
.container{
	display:flex;
}
.make-me-fit{
	display:inline-block;
	width:fit-content;
}
.center{
	margin:auto;
	width:25%;
	height:500px;
	box-shadow:5px 10px;
	border:3px solid tan;
	padding:10px;
}
</style>
<div class="container-xxl py-5 bg-white">
    <div class="container">
		<div class="center bg-light">
			<center><img src="../Login/image/<?php echo $rw1[1]; ?>" height="220px" width="220px" style="margin-top:20px"></center>
			<div style="margin-top:20px;text-align:center">
			Name : <b><?php echo $rw1[2]; ?> </b><br>
			Email : <b><?php echo $rw1[3]; ?> </b><br>
			Phone No : <b><?php echo $rw1[5]; ?> </b><br>
			Address : <b><?php echo $rw1[6]; ?> </b><br>
			ID Type :<b><?php echo $rw1[7]; ?> </b><br>
			
			</div>
			<!--<center><button type="submit" style="background-color:tan;width=200px;height:40px;margin-top:30px;border-radius:15px">Update Profile</button></center>
			-->
		</div>
	</div>
</div>