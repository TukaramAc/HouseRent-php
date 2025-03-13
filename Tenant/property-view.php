<?php
include("navbar.php");
$con=mysqli_connect('localhost','root','','house_rent');
$pro_id=$_GET['id'];
$sql1="select * from add_property where id=$pro_id ";
$res1=mysqli_query($con,$sql1);
$rw1=mysqli_fetch_row($res1);
?>

        <!-- Header Start -->
        <div class="container-xxl header bg-white py-5">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
				<div class="col-md-6 p-5 animated fadeIn">
                    <img class="img-fluid" src="../image/<?php echo $rw1[1]; ?>" alt="" style="height:700px">
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
						  <th class="table-info"> Property Type </td>
						  <td> <?php echo $rw1[11]; ?> </td>
                        </tr>
						<tr>
						  <th class="table-info"> Estimated Price </td>
						  <td> <?php echo $rw1[12]; ?> </td>
                        </tr><tr>
						  <th class="table-info"> Total Rooms </td>
						  <td> <?php echo $rw1[13]; ?> </td>
                        </tr>
						<tr>
						  <th class="table-info"> Bed Rooms </td>
						  <td> <?php echo $rw1[14]; ?> </td>
                        </tr>
						<tr>
						  <th class="table-info"> Living Rooms </td>
						  <td> <?php echo $rw1[15]; ?> </td>
                        </tr>
						<tr>
						  <th class="table-info"> Kitchen </td>
						  <td> <?php echo $rw1[16]; ?> </td>
                        </tr>
						<tr>
						  <th class="table-info"> Bathroom </td>
						  <td> <?php echo $rw1[17]; ?> </td>
                        </tr>
						<tr>
						  <th class="table-info"> Description </td>
						  <td> <?php echo $rw1[18]; ?> </td>
                        </tr>
                      </tbody>
                    </table>
                </div>
				<div class="container-xxl py-5" style="text-align:center">
					<button type="submit" name="btn" class="btn btn-success btn-fw" style="width:600px;">Book</button>
					<button type="submit" name="btn" class="btn btn-warning btn-fw" style="width:600px;">Send Message</button>		
				</div>
            </div>
        </div>
        <!-- Header End -->
		 <div class="container-xxl py-5 bg-white">
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
				<div id="map" >
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
				<div style="border-radius:30px;border-color:red">
				<?php
				$sql2="select * from review";
				$res2=mysqli_query($con,$sql2);
				while($rw2=mysqli_fetch_row($res2))
				{
					?>
					<ul>
						<li><?php echo $rw2[1] ; echo "&nbsp&nbsp"; echo "(",$rw2[2]; ?>
                        <i class="fas fa-star">)</i>
                      </li>
					</ul>
					<?php
				}
				?>
				</div>
			  </div>
			</div>
		</div>















        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Get In Touch</h5>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Quick Links</h5>
                        <a class="btn btn-link text-white-50" href="">About Us</a>
                        <a class="btn btn-link text-white-50" href="">Contact Us</a>
                        <a class="btn btn-link text-white-50" href="">Our Services</a>
                        <a class="btn btn-link text-white-50" href="">Privacy Policy</a>
                        <a class="btn btn-link text-white-50" href="">Terms & Condition</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Photo Gallery</h5>
                        <div class="row g-2 pt-2">
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-1.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-2.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-3.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-4.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-5.jpg" alt="">
                            </div>
                            <div class="col-4">
                                <img class="img-fluid rounded bg-light p-1" src="img/property-6.jpg" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Newsletter</h5>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                            <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Your Site Name</a>, All Right Reserved. 
							
							<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
							Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="">Home</a>
                                <a href="">Cookies</a>
                                <a href="">Help</a>
                                <a href="">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


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