<?php
$con = mysqli_connect('localhost', 'root', '', 'house_rent');
$pid = $_GET['id'];
session_start();
$user = "";
if (isset($_SESSION['email'])) {
	$user = $_SESSION['email'];
	include("Tenant-navbar.php");
	$userquery = "select * from register where email = '$user'";
	$res = mysqli_query($con, $userquery);
	$rw = mysqli_fetch_assoc($res);
	$uid = $rw['id'];
	$uname = $rw['name'];
	$uaddress = $rw['address'];


	if (isset($_POST['btn']))
	 {
		$province = $_POST['province'];
		$district = $_POST['district'];
		$zone = $_POST['zone'];
		$ward = $_POST['ward'];
		$tole = $_POST['tole'];

		$bookquery = "insert into booked_property(bookedby,bookedaddress,province,district,zone,ward_no,tole,pid,uid)
    values('$uname','$uaddress','$province','$district','$zone',$ward,'$tole','$pid','$uid')";
		if (mysqli_query($con, $bookquery)) {
			echo "<script>alert('property booked')</script>";
		} else {
			echo "error".$con->error;
		}
	}
} 
else 
{
	include("navbar.php");
}

$pro_id = $_GET['id'];
$sql1 = "select * from add_property where id=$pro_id ";
$res1 = mysqli_query($con, $sql1);
$rw1 = mysqli_fetch_row($res1);
// if (isset($_POST['btn'])) {
	// //$booked='Yes';
	// $sql3="insert into add_property(booked)values('$booked')";

	// if(mysqli_query($con,$sql3))
	// {
	//   echo "<script>alert('property booked')</script>";
	// }
	// else
	// {
	//   echo "error";
	//}
//}

?>
<?php
if(isset($_POST['already_btn']))
{
	echo "<script>alert('Already booked')</script>";
}
?>


<!-- Header Start -->
<div class="container-xxl py-5">
	<div class="container">
		<form method="post">
		<input type="hidden" name="pid" value="<?php echo  $rw['id'];?>">
                    <input type="hidden" name="province" value="<?php echo $rw1[3]; ?>">
                    <input type="hidden" name="district" value="<?php echo $rw1[5]; ?>">
                    <input type="hidden" name="zone" value=" <?php echo $rw1[4]; ?>">
                    <input type="hidden" name="ward" value="<?php echo $rw1[8]; ?>">
                    <input type="hidden" name="tole" value="<?php echo $rw1[9]; ?>">
			<div class="container-fluid header bg-white p-0">
				<div class="row g-0 align-items-center flex-column-reverse flex-md-row">
					<div class="col-md-6 animated fadeIn">
						<img class="img-fluid" src="img/<?php echo $rw1[1]; ?>" alt="" style="height:600px">
					</div>
					<div class="col-md-6 p-5 mt-lg-5">
						<table class="table table-bordered" border="3">
							<tbody>
								<tr>
									<th class="table-info"> Country </td>
									<td> <?php echo $rw1[2]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Province </td>
									<td> <?php echo $rw1[3]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Zone </td>
									<td> <?php echo $rw1[4]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> District </td>
									<td> <?php echo $rw1[5]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> City </td>
									<td> <?php echo $rw1[6]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> vdc Municipality </td>
									<td> <?php echo $rw1[7]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Ward number </td>
									<td> <?php echo $rw1[8]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Tole </td>
									<td> <?php echo $rw1[9]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Contact Number </td>
									<td> <?php echo $rw1[10]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Estimated Price </td>
									<td> <?php echo $rw1[11]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Total Rooms </td>
									<td> <?php echo $rw1[12]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Bed Rooms </td>
									<td> <?php echo $rw1[13]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Living Rooms </td>
									<td> <?php echo $rw1[14]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Kitchen </td>
									<td> <?php echo $rw1[15]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Bathroom </td>
									<td> <?php echo $rw1[16]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Booked </td>
									<td> <?php echo $rw1[17]; ?> </td>
								</tr>
								<tr>
									<th class="table-info"> Description </td>
									<td> <?php echo $rw1[18]; ?> </td>
								</tr>
							</tbody>
						</table>
					</div>
					<?php
					$id = $_GET['id'];
					if (isset($_SESSION['email'])) {
						$sql1 = "select count(id) from booked_property where pid='$id'";
						$res1 = mysqli_query($con, $sql1);
						$count = mysqli_fetch_row($res1);
						if ($count[0] == '1') {
					?>
							<div class="container" style="text-align:center">
								<button type="submit" name="already_btn" class="btn btn-success	 btn-fw" style="width:500px;" disabled>Booked</button>
								<button type="submit" name="btn-cancle" class="btn btn-warning btn-fw" style="width:500px;">Send Message</button>
							</div>
						<?php
						} else {
						?>
							<div class="container" style="text-align:center">
								<button type="submit" name="btn" class="btn btn-danger btn-fw" style="width:500px;">Book Property</button>
								<button type="submit" name="btn-cancle" class="btn btn-warning btn-fw" style="width:500px;">Send Message</button>
							</div>
					<?php
						}
					} else {
						echo "You Should Login to Book Property";
					}
					?>
				</div>
			</div>
		</form>
	</div>
</div>
<!-- Header End -->
<div class="container-xxl py-5">
	<div class="container">
		<div class="row g-0 gx-5 align-items-end">
			<div class="col-lg-6">
				<div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
					<h1 class="mb-3">Find Home</h1>
				</div>
			</div>
		</div>
		<div class="col-md-12 text-center">
			<!-- How to change your own map point
					1. Go to Google Maps
					2. Click on your location point
					3. Click "Share" and choose "Embed map" tab
					4. Copy only URL and paste it within the src="" field below
				-->
			<div id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3801.83668572583!2d75.92616967048563!3d17.65789235801964!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc5da596aaaaaab%3A0x75baf63624f658cc!2sVishaka%20Industries%20Solapur!5e0!3m2!1sen!2sin!4v1708328126176!5m2!1sen!2sin" width="100%" height="330px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>
</div>
</div>

<div class="container-xxl py-5 bg-white">
	<div class="container">
		<div class="row g-0 gx-5 align-items-end">
			<div class="col-lg-6">
				<div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
					<h3 class="mb-3">Reviews :</h3>
				</div>
			</div>
		</div>
		<div>
			<?php
			if ($user == null) { ?>
				<h5 style="color:red">You Should Register to Give a View</h5>

			<?php
			} else {
			?>
				<div class="col-sm-12 mt-4">
					<textarea name="description" class="form-control" rows="3" placeholder="Review"></textarea>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
					<i class="fas fa-star"></i>
				</div>
			<?php
			}

			$sql2 = "select * from review";
			$res2 = mysqli_query($con, $sql2);
			while ($rw2 = mysqli_fetch_row($res2)) {
			?>
				<ul>
					<li><?php echo $rw2[1];
						echo "&nbsp&nbsp";
						echo "(", $rw2[2]; ?>
						<i class="fas fa-star"></i>
					</li>
				</ul>
			<?php
			}
			?>
		</div>
	</div>
</div>















<?php
include("footer.php");
?>


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
</body>

</html>