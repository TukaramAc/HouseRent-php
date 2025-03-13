<?php
include("navbar.php");
?>

        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Property List</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Pages</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Property List</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="img/header.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->


        <!-- Search Start -->
        <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="container">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-12">
                                <input type="text" class="form-control border-0 py-3" placeholder="Search Keyword">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-dark border-0 w-100 py-3">Search</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search End -->


        
		
		<!-- Property List Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h1 class="mb-3">Property Listing</h1>
                        </div>
                    </div>
                </div>
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4 ">
                            <?php
							$con=mysqli_connect('localhost','root','','house_rent');
							$s2="select * from add_property";
							$res2=mysqli_query($con,$s2);
							$i=0;
							while($rw2=mysqli_fetch_row($res2) and $i<6)
							{
								$i=$i+1;
								?>
								<div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
									<div class="property-item rounded overflow-hidden" style="background-color:#EFFDF5">
										<div class="position-relative overflow-hidden">
											<a href="property-view.php?id=<?php echo $rw2[0]; ?>">
											<img class="img-fluid" src="Owner/image/<?php echo $rw2[1]; ?>" style="padding:5px;height:270px;width:270px;border-radius:30px" alt="" ></a>
											<div class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">For Rent</div>
										</div>
										<div class="p-4 pb-0">
											<h5 class="text-primary mb-3">
											<i class="fa fa-rupee-sign text-primary me-2"></i><?php echo $rw2[11]; ?></h5>
											<a class="d-block h5 mb-2" href=""><?php echo $rw2[6]; ?></a>
											<p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York, USA</p>
										</div>
										<div class="d-flex border-top">
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-bed text-primary me-2"></i><?php echo $rw2[13]; ?> Bed</small>
											<small class="flex-fill text-center border-end py-2"><i class="fa fa-couch text-primary me-2"></i><?php echo $rw2[14]; ?> Living</small>
											<small class="flex-fill text-center py-2"><i class="fa fa-bath text-primary me-2"></i><?php echo $rw2[16]; ?> Bath</small>
										</div>
									</div>
								</div>
								<?php
							}
							?>
                            
                            
                            </div>
                            <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                                <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->


        



        
		
		
		

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