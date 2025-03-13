<?php
$id = $_GET['id'];
include("navbar.php");
$con = mysqli_connect('localhost', 'root', '', 'house_rent');

if (isset($_POST['btn'])) {
    $country = $_POST['country'];
    $pro = $_POST['pro'];
    $zone = $_POST['zone'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $vdc = $_POST['vdc'];
    $ward_no = $_POST['ward_no'];
    $tole = $_POST['tole'];
    $contact = $_POST['contact'];
    $price = $_POST['price'];
    $troom = $_POST['troom'];
    $bedroom = $_POST['bedroom'];   
    $livingroom = $_POST['livingroom'];
    $kitchen = $_POST['kitchen'];
    $bathroom = $_POST['bathroom'];
    $booked = $_POST['booked'];
    $des = $_POST['des'];
    
        $sql3 = "UPDATE add_property SET country='$country',pro='$pro',zone='$zone',district='$district',
        city='$city',vdc='$vdc',ward_no='$ward_no',tole='$tole',contact='$contact',estimated_price='$price',
        total_room='$troom',bed_room='$bedroom',living_room='$livingroom',kitchen='$kitchen',bathroom='$bathroom',
        booked='$booked',description='$des' WHERE id=$id";
        if (mysqli_query($con, $sql3)) {
            echo "<script>alert('Property Add Successfully')</script>";
        } else {
            echo "<script>alert('Property Not Add')</script>";
        }
    
}



?>
<div class="card card-default">
    <div class="card-header">
        <center>
            <h1 style="color:cadetblue;font-style:italic;margin-top:50px">Add Property</h1>
        </center>

        <div class="card-body">
            <?php
            $id = $_GET['id'];
            $query = "SELECT * FROM add_property WHERE id='$id'";
            $res = mysqli_query($con, $query);
            $rw1 = mysqli_fetch_row($res);
            ?>

            <form method="post" enctype="multipart/form-data" style="margin:10px 40px 10px 40px">
                <div class="row">
                    <div class="col-sm-6 mt-4">
                        <label for="inputname">Country:</label>
                        <input type="text" name="country" class="form-control" placeholder="Enter Country" value='<?php echo $rw1[2]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputroom">Total No. of Rooms:</label>
                        <input type="text" name="troom" class="form-control" placeholder="Enter Total No. of Rooms" value='<?php echo $rw1[12]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputname">Province/State:</label>
                        <input type="text" name="pro" class="form-control" placeholder="Enter Province" value='<?php echo $rw1[3]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputbedroom">No. of Bed Room:</label>
                        <input type="text" name="bedroom" class="form-control" placeholder="Enter No. of Bed Room" value='<?php echo $rw1[13]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputname">Zone:</label>
                        <input type="text" name="zone" class="form-control" placeholder="Enter Zone" value='<?php echo $rw1[4]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputbathroom">No .of Living Rooms:</label>
                        <input type="text" name="livingroom" class="form-control" placeholder="Enter No .of Living Rooms" value='<?php echo $rw1[14]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputkitchen">District:</label>
                        <input type="text" name="district" class="form-control" placeholder="Enter District" value='<?php echo $rw1[5]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputkitchen">No. of Kitchen:</label>
                        <input type="text" name="kitchen" class="form-control" placeholder="Enter No. of Bed Room" value='<?php echo $rw1[15]; ?>'>
                    </div>

                    <div class="col-sm-6 mt-4">
                        <label for="inputcity">City:</label>
                        <input type="text" name="city" class="form-control" placeholder="Enter City name" value='<?php echo $rw1[6]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputbathroom">No .of Bathroom/Washroom:</label>
                        <input type="text" name="bathroom" class="form-control" placeholder="Enter No .of Bathroom/Washroom" value='<?php echo $rw1[16]; ?>'>
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
                        <input type="textarea" name="contact" class="form-control" placeholder="Enter Contact No" value='<?php echo $rw1[10]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputward">Ward No:</label>
                        <input type="text" name="ward_no" class="form-control" placeholder="Enter Ward no" value='<?php echo $rw1[8]; ?>'>
                    </div>

                    <div class="col-sm-6 mt-4">
                        <label for="inputprice">Estimated Price:</label>
                        <input type="text" name="price" class="form-control" placeholder="Enter Estimated Price" value='<?php echo $rw1[11]; ?>'>
                    </div>

                    <div class="col-sm-6 mt-4">
                        <label for="inputTole">Tole:</label>
                        <input type="text" name="tole" class="form-control" placeholder="Enter tole:" value='<?php echo $rw1[9]; ?>'>
                    </div>

                    <!-- <div class="col-sm-6 mt-4">
                        <label for="inputphoto">House Photo:</label>
                        <input type="file" name="image" class="form-control" value='<?php echo $rw1[10]; ?>'>
                    </div> -->
                    <div class="col-sm-6 mt-4">
                        <label for="inputdescription">Description</label>
                        <input type="text" name="des" class="form-control" placeholder="Enter tole:" value='<?php echo $rw1[18]; ?>'>
                    </div>
                    <div class="col-sm-6 mt-4">
                        <label for="inputdescription">Booked status</label>
                        <input type="text" name="booked" class="form-control" placeholder="Book Status:" value='<?php echo $rw1[17]; ?>'>
                    </div>
                    <div class="form-footer col-sm-12 mt-4">
                        <button type="submit" name="btn" style="width:300px;background-color:cadetblue">Save</button>
                        <button type="submit" class="btn_cancle" style="width:300px;background-color:indianred">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>