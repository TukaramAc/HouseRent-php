<?php
include("navbar.php");
$con=mysqli_connect('localhost','root','','house_rent');
$sq="select id from register where email='$user' and user_type='owner'";
$res=mysqli_query($con,$sq);
$rw=mysqli_fetch_row($res);

if(isset($_POST['btn_save']))
{
	
	$filename=$_FILES['image']['name'];
	$filetype=$_FILES['image']['type'];
	$filetmp=$_FILES['image']['tmp_name'];
	$filesize=$_FILES['image']['size'];
	$folder="image/".$filename;
	$country=$_POST['country'];
	$pro=$_POST['pro'];
	$zone=$_POST['zone'];
	$district=$_POST['district'];
	$city=$_POST['city'];
	$vdc=$_POST['vdc'];
	$ward_no=$_POST['ward_no'];
	$tole=$_POST['tole'];
	$contact=$_POST['contact'];
	$price=$_POST['price'];
	$troom=$_POST['troom'];
	$bedroom=$_POST['bedroom'];
	$livingroom=$_POST['livingroom'];
	$kitchen=$_POST['kitchen'];
	$bathroom=$_POST['bathroom'];
	$booked="No";
	$des=$_POST['des'];
	$own_id=$rw[0];
	if(move_uploaded_file($filetmp,$folder))
	{
		$sql3="insert into add_property(photo,country,pro,zone,district,city,vdc,ward_no,tole,contact,estimated_price,total_room,bed_room,living_room,kitchen,bathroom,booked,description,own_id)values
		('$filename','$country','$pro','$zone','$district','$city','$vdc','$ward_no','$tole','$contact','$price','$troom','$bedroom','$livingroom','$kitchen','$bathroom','$booked','$des','$own_id')";
			if(mysqli_query($con,$sql3))
			{
				echo "<script>alert('Property Add Successfully')</script>";
			}
			else
			{
				echo "<script>alert('Property Not Add')</script>";
			}
	}	
}



?>
<div class="card card-default">
      <div class="card-header">
        <center><h1 style="color:cadetblue;font-style:italic;margin-top:50px">Add Property</h1></center>
		
			<div class="card-body">
				
			<form  method="post" enctype="multipart/form-data" style="margin:10px 40px 10px 40px">
					<div class="row">
			<div class="col-sm-6 mt-4">
				<label for="inputname">Country:</label>
				<input type="text" name="country" class="form-control" placeholder="Enter Country">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputroom">Total No. of Rooms:</label>
				<input type="text" name="troom" class="form-control" placeholder="Enter Total No. of Rooms">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputname">Province/State:</label>
				<input type="text" name="pro" class="form-control" placeholder="Enter Province">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputbedroom">No. of Bed Room:</label>
				<input type="text" name="bedroom" class="form-control" placeholder="Enter No. of Bed Room">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputname">Zone:</label>
				<input type="text" name="zone" class="form-control" placeholder="Enter Zone">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputbathroom">No .of Living Rooms:</label>
				<input type="text" name="livingroom" class="form-control" placeholder="Enter No .of Living Rooms">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputkitchen">District:</label>
				<input type="text" name="district" class="form-control" placeholder="Enter District">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputkitchen">No. of Kitchen:</label>
				<input type="text" name="kitchen" class="form-control" placeholder="Enter No. of Bed Room">
			</div>
			
			<div class="col-sm-6 mt-4">
				<label for="inputcity">City:</label>
				<input type="text" name="city" class="form-control" placeholder="Enter City name">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputbathroom">No .of Bathroom/Washroom:</label>
				<input type="text" name="bathroom" class="form-control" placeholder="Enter No .of Bathroom/Washroom">
			</div>
			<div class="form-group col-sm-6 mt-4">
            <label>VDC/Municipality</label>
            <select name="vdc" class="form-control">
              <option>VDC</option>
              <option>Municipality</option>
            </select>
          </div>
			
			<div class="col-sm-6 mt-4">
				<label for="inputcontact">Contact No:</label>
				<input type="textarea" name="contact" class="form-control" placeholder="Enter Contact No">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputward">Ward No:</label>
				<input type="text" name="ward_no" class="form-control" placeholder="Enter Ward no">
			</div>
			
			<div class="col-sm-6 mt-4">
				<label for="inputprice">Estimated Price:</label>
				<input type="text" name="price" class="form-control" placeholder="Enter Estimated Price">
			</div>
			
			<div class="col-sm-6 mt-4">
				<label for="inputTole">Tole:</label>
				<input type="text" name="tole" class="form-control" placeholder="Enter tole:">
			</div>
			
			
			<div class="col-sm-6 mt-4">
				<label for="inputphoto">House Photo:</label>
				<input type="file" name="image" class="form-control">
			</div>
			<div class="col-sm-6 mt-4">
				<label for="inputdescription">Description</label>
				<input type="text" name="des" class="form-control" placeholder="Enter tole:">
            </div>
			<div class="form-footer col-sm-12 mt-4">
            <button type="submit" name="btn_save" class="btn" style="width:300px;background-color:cadetblue">Save</button>
            <button type="submit" class="btn" style="width:300px;background-color:indianred">Cancel</button>
          </div>
		</div>
		</form>
	  </div>
    </div>

   