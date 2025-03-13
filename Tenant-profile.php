<?php
session_start();
	$user="";
	if(isset($_SESSION['email']))
	{
		$user=$_SESSION['email'];
	}
include("Tenant-navbar.php");
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
			<center><img src="Login/image/<?php echo $rw1[1]; ?>" height="220px" width="220px" style="margin-top:20px"></center>
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



  <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>

</html>
